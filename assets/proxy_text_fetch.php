<?php
// proxy_text_fetch.php
// Usage: POST url, username (optional), password (optional), auth_type (optional: "basic")

header('Content-Type: text/plain; charset=utf-8');

// Basic input check
$url = isset($_POST['url']) ? trim($_POST['url']) : '';
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$auth_type = isset($_POST['auth_type']) ? $_POST['auth_type'] : 'basic';

if (!$url) {
    http_response_code(400);
    echo "Missing 'url' parameter.";
    exit;
}

// Prepare cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
curl_setopt($ch, CURLOPT_USERAGENT, 'ProxyTextFetcher/1.0');

// If Basic auth requested and credentials provided
if ($auth_type === 'basic' && $username !== '' && $password !== '') {
    curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);
}

// If cookie/session required (for form logins) you could add cookie jar handling here.
// For simple Basic Auth this is enough.

$html = curl_exec($ch);
$err = curl_error($ch);
$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($html === false || $code >= 400) {
    http_response_code(502);
    echo "Failed to fetch remote URL. HTTP code: " . $code . ($err ? " - " . $err : "");
    exit;
}

// Convert HTML to plain visible text
libxml_use_internal_errors(true);
$doc = new DOMDocument();
$loaded = $doc->loadHTML('<?xml encoding="utf-8" ?>' . $html);
if (!$loaded) {
    // fallback: strip tags
    $text = trim(strip_tags($html));
    echo $text;
    exit;
}

// Remove script and style elements
$xpath = new DOMXPath($doc);
foreach ($xpath->query('//script | //style | //noscript') as $n) {
    $n->parentNode->removeChild($n);
}

// Get body text
$body = $doc->getElementsByTagName('body')->item(0);
$text = '';
if ($body) {
    $text = trim($body->textContent);
} else {
    $text = trim($doc->textContent);
}

// Normalize whitespace
$text = preg_replace("/\s+\n/", "\n", $text);
$text = preg_replace("/[ \t]{2,}/", " ", $text);

echo $text;
