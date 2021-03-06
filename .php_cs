<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
;

return PhpCsFixer\Config::create()
    ->setRules([
        '@Symfony' => true,
        '@Symfony:risky' => true,
        '@DoctrineAnnotation' => true,
        '@PHP71Migration' => true,
        '@PHPUnit60Migration:risky' => true,
        'align_multiline_comment' => true,
        'array_indentation' => true,
        'array_syntax' => ['syntax' => 'short'],
        'combine_consecutive_issets' => true,
        'combine_consecutive_unsets' => true,
        'comment_to_phpdoc' => true,
        'date_time_immutable' => true,
        'compact_nullable_typehint' => true,
        'escape_implicit_backslashes' => ['double_quoted' => true, 'heredoc_syntax' => true, 'single_quoted' => false],
        'explicit_indirect_variable' => true,
        'explicit_string_variable' => true,
        'final_internal_class' => true,
        'fully_qualified_strict_types' => true,
        'general_phpdoc_annotation_remove' => ['annotations' => ['author', 'package']],
        'heredoc_to_nowdoc' => true,
        'linebreak_after_opening_tag' => true,
        'list_syntax' => ['syntax' => 'short'],
        'mb_str_functions' => true,
        'method_chaining_indentation' => true,
        'multiline_comment_opening_closing' => true,
        'multiline_whitespace_before_semicolons' => ['strategy' => 'new_line_for_chained_calls'],
        'no_alternative_syntax' => true,
        'no_php4_constructor' => true,
        'no_short_echo_tag' => true,
        'no_superfluous_elseif' => true,
        'no_unreachable_default_argument_value' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'ordered_class_elements' => ['order' => ['use_trait', 'constant_public', 'constant_protected', 'constant_private', 'property_public', 'property_protected', 'property_private', 'construct', 'destruct', 'magic', 'phpunit', 'method_public', 'method_protected', 'method_private']],
        'ordered_imports' => ['importsOrder' => null, 'sortAlgorithm' => 'alpha'],
        'php_unit_ordered_covers' => true,
        'php_unit_set_up_tear_down_visibility' => true,
        'php_unit_test_annotation' => ['case' => 'camel', 'style' => 'prefix'],
        'phpdoc_add_missing_param_annotation' => ['only_untyped' => false],
        'phpdoc_order' => true,
        'phpdoc_types_order' => ['null_adjustment'=> 'always_last', 'sort_algorithm' => 'alpha'],
        'semicolon_after_instruction' => true,
        'simplified_null_return' => true,
        'single_line_comment_style' => ['comment_types' => ['asterisk', 'hash']],
        'strict_comparison' => true,
        'string_line_ending' => true
    ])
    ->setCacheFile(__DIR__.'/.php_cs.cache')
    ->setFinder($finder)
    ->setRiskyAllowed(true)
;
