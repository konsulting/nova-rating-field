<?php

$rules = [
    '@PSR2' => true,
    'array_syntax' => ['syntax' => 'short'],
    'multiline_whitespace_before_semicolons' => true,
    'echo_tag_syntax' => ['format' => 'long'],
    'no_unused_imports' => true,
    'method_argument_space' => ['ensure_fully_multiline' => false],
    'not_operator_with_successor_space' => true,
    'blank_line_after_opening_tag' => true,
    'no_empty_statement' => true,
    'no_extra_blank_lines' => true,
    'include' => true,
    'no_trailing_comma_in_list_call' => true,
    'trailing_comma_in_multiline' => ['elements' => ['arrays']],
    'no_leading_namespace_whitespace' => true,
    'no_blank_lines_after_class_opening' => true,
    'no_blank_lines_after_phpdoc' => true,
    'object_operator_without_whitespace' => true,
    'binary_operator_spaces' => ['operators' => false],
    'phpdoc_indent' => true,
    'phpdoc_no_access' => true,
    'phpdoc_no_package' => true,
    'phpdoc_scalar' => true,
    'phpdoc_summary' => true,
    'phpdoc_to_comment' => true,
    'phpdoc_trim' => true,
    'phpdoc_var_without_name' => true,
    'no_leading_import_slash' => true,
    'blank_line_before_statement' => ['statements' => ['return']],
    'no_trailing_comma_in_singleline_array' => true,
    'single_blank_line_before_namespace' => true,
    'single_quote' => true,
    'no_singleline_whitespace_before_semicolons' => true,
    'cast_spaces' => true,
    'standardize_not_equals' => true,
    'ternary_operator_spaces' => true,
    'trim_array_spaces' => true,
    'unary_operator_spaces' => true,
    'no_whitespace_in_blank_line' => true,
    'ordered_imports' => true,
];

$excludes = [
    'vendor',
    'node_modules',
    'system',
];

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . '/src')
    ->exclude($excludes)
    ->ignoreVCS(true)
    ->ignoreDotFiles(true)
    ->name('*.php');

$config = new PhpCsFixer\Config();

return $config
    ->setRules($rules)
    ->setUsingCache(true)
    ->setFinder($finder);
