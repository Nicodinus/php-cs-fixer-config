<?php

namespace Nicodinus\CodeStyle;

use PhpCsFixer\Config as PhpCsFixerConfig;
use function dirname;
use function is_dir;

class Config extends PhpCsFixerConfig
{
    /** @var string */
    private string $src;

    /**
     * PhpCsFixerConfig constructor.
     */
    public function __construct()
    {
        parent::__construct('org.user.nicodinus');

        $this->setRiskyAllowed(true);
        $this->setLineEnding("\n");

        if (is_dir(dirname(__DIR__, 4) . '/src')) {
            $this->src = dirname(__DIR__, 4) . '/src';
        } elseif (is_dir(dirname(__DIR__, 4) . '/lib')) {
            $this->src = dirname(__DIR__, 4) . '/lib';
        } else {
            $this->src = __DIR__;
        }
    }

    /**
     * @return array
     */
    public function getRules(): array
    {
        return [
            "@PSR1" => true,
            "@PSR2" => true,
            "braces" => [
                "allow_single_line_closure" => true,
            ],
            "array_syntax" => ["syntax" => "short"],
            "cast_spaces" => true,
            "combine_consecutive_unsets" => true,
            "function_to_constant" => true,
            "native_function_invocation" => ['include' => ['@internal'], 'scope' => 'namespaced'],
            "multiline_whitespace_before_semicolons" => true,
            "no_unused_imports" => true,
            "no_useless_else" => true,
            "no_useless_return" => true,
            "no_whitespace_before_comma_in_array" => true,
            "no_whitespace_in_blank_line" => true,
            "non_printable_character" => true,
            "normalize_index_brace" => true,
            "ordered_imports" => ['imports_order' => ['class', 'const', 'function']],
            "php_unit_construct" => true,
            "php_unit_dedicate_assert" => true,
            "php_unit_fqcn_annotation" => true,
            "phpdoc_summary" => true,
            "phpdoc_types" => true,
            "psr_autoloading" => ['dir' => $this->src],
            "return_type_declaration" => ["space_before" => "none"],
            "short_scalar_cast" => true,
            "single_blank_line_before_namespace" => true,
            "line_ending" => true,
            "no_superfluous_phpdoc_tags" => false,
            "no_empty_phpdoc" => true,
            "no_extra_blank_lines" => true,
        ];
    }
}
