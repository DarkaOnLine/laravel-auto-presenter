<?php

$fixers = array(
    'encoding',
    'short_tag',
    'braces',
    'elseif',
    'eof_ending',
    'function_declaration',
    'indentation',
    'line_after_namespace',
    'linefeed',
    'lowercase_constants',
    'lowercase_keywords',
    'multiple_use',
    'php_closing_tag',
    'trailing_spaces',
    'duplicate_semicolon',
    'extra_empty_lines',
    'include',
    'multiline_array_trailing_comma',
    'namespace_no_leading_whitespace',
    'new_with_braces',
    'object_operator',
    'operators_spaces',
    'phpdoc_params',
    'single_array_no_trailing_comma',
    'spaces_before_semicolon',
    'spaces_cast',
    'standardize_not_equal',
    'ternary_spaces',
    'unused_use',
    'whitespacy_lines',
    'multiline_spaces_before_semicolon',
    'ordered_use',
    'remove_lines_between_uses',
);

return Symfony\CS\Config\Config::create()->fixers($fixers)
    ->finder(Symfony\CS\Finder\DefaultFinder::create()->in(__DIR__));
