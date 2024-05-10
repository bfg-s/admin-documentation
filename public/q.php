<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");


$indexes = file_get_contents('https://raw.githubusercontent.com/bfg-s/admin-documentation/master/Writerside/index.json');
$indexes = json_decode($indexes, true);

$resultTitles = [];
$resultContents = [];
$q = strtolower($_GET['query'] ?: '');

foreach ($indexes as $index) {
    if (str_contains(strtolower($index['title']), $q)) {
        $resultTitles[] = [
            'breadcrumbs' => '',
            'mainTitle' => $index['title'],
            'pageTitle' => $index['title'],
            'objectID' => $index['name'],
            'url' => 'writerside-documentation/bfg-admin-documentation/' . $index['html'],
            '_snippetResult' => [
                'content' => [
                    'value' => findTextAndSurrounding($index['title'], $q),
                    'matchLevel' => 'full',
                ]
            ],
            '_highlightResult' => [
                'headings' => [
                    'value' => $index['title'],
                    'matchLevel' => 'none',
                    'matchedWords' => [$q],
                ],
                'content' => [
                    'value' => findTextAndSurrounding($index['content_html'], $q),
                    'matchLevel' => 'full',
                    'fullyHighlighted' => false,
                    'matchedWords' => [$q],
                ],
                'pageTitle' => [
                    'value' => $index['title'],
                    'matchLevel' => 'none',
                    'matchedWords' => [$q],
                ],
                'metaDescription' => [
                    'value' => '',
                    'matchLevel' => 'none',
                    'matchedWords' => [$q],
                ],
                'mainTitle' => [
                    'value' => $index['title'],
                    'matchLevel' => 'none',
                    'matchedWords' => [$q],
                ]
            ]
        ];
    }
    if (
        str_contains(strtolower($index['content_html']), $q)
        && ! whereIs($resultTitles, 'pageTitle', $index['title'])
    ) {
        $resultContents[] = [
            'breadcrumbs' => '',
            'mainTitle' => $index['title'],
            'pageTitle' => $index['title'],
            'objectID' => $index['name'],
            'url' => 'writerside-documentation/bfg-admin-documentation/' . $index['html'],
            '_snippetResult' => [
                'content' => [
                    'value' => findTextAndSurrounding($index['content_html'], $q),
                    'matchLevel' => 'full',
                ]
            ],
            '_highlightResult' => [
                'headings' => [
                    'value' => $index['title'],
                    'matchLevel' => 'none',
                    'matchedWords' => [$q],
                ],
                'content' => [
                    'value' => findTextAndSurrounding($index['content_html'], $q),
                    'matchLevel' => 'full',
                    'fullyHighlighted' => false,
                    'matchedWords' => [$q],
                ],
                'pageTitle' => [
                    'value' => $index['title'],
                    'matchLevel' => 'none',
                    'matchedWords' => [$q],
                ],
                'metaDescription' => [
                    'value' => '',
                    'matchLevel' => 'none',
                    'matchedWords' => [$q],
                ],
                'mainTitle' => [
                    'value' => $index['title'],
                    'matchLevel' => 'none',
                    'matchedWords' => [$q],
                ]
            ]
        ];
    }
}

$result = array_merge($resultTitles, $resultContents);

echo json_encode([
    'hits' => $result,
    'nbHits' => count($result),
], JSON_PRETTY_PRINT);

function whereIs(array $array, string $field, string $value): array
{
    return array_filter($array, fn($item) => $item[$field] === $value);
}

function findTextAndSurrounding($text, $search): string
{
    $text = strip_tags($text);
    $pos = stripos($text, $search);

    if ($pos === false) {
        $length = 200;
        if (strlen($text) > $length) {
            return substr($text, 0, $length) . '...';
        }
        return $text;
    }

    $start = $pos - 100;
    $prefix = '...';
    if ($start <= 0) {
        $start = 0;
        $prefix = '';
    }

    $length = 200 + strlen($search);

    $suffix = '...';
    if ($start + $length >= strlen($text)) {
        $length = strlen($text) - $start;
        $suffix = '';
    }

    $result = substr($text, $start, $length);

    $result = preg_replace("/(" . preg_quote($search, '/') . ")/i", '<em>$1</em>', $result);

    return $prefix . $result . $suffix;
}
