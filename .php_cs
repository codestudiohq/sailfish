<?php

// Rules for Laravel Code Standard
$rules = [
    '@PSR2'                                 => true,

    // PHP arrays should be declared using the configured syntax.
    'array_syntax'                          => [
        'syntax' => 'short', //whether to use the long or short array syntax;
    ],

    // Binary operators should be surrounded by at least one space.
    'binary_operator_spaces' => [
        'align_double_arrow' => true, // whether to apply, remove or ignore double arrows alignment
        'align_equals'       => false, // whether to apply, remove or ignore equals alignment
    ],

    // Ensure there is no code on the same line as the PHP open tag and it is followed by a blank line.
    'blank_line_after_opening_tag'          => true,

    // An empty line feed should precede a return statement.
    'blank_line_before_return' => true,

    // A single space should be between cast and variable.
    'cast_spaces'                           => true,

    // Concatenation should be spaced according configuration.
    'concat_space'                          => [
        'spacing' => 'none', // spacing to apply around concatenation operator
    ],

    // Include/Require and file path should be divided with a single space. File path should not be placed under brackets.
    'include'                                   => true,

    // There should be no empty lines after class opening brace.
    'no_blank_lines_after_class_opening'        => true,

    // There should not be blank lines between docblock and the documented element.
    'no_blank_lines_after_phpdoc' => true,

    // Remove useless semicolon statements.
    'no_empty_statement'                        => true,

    // Removes extra blank lines and/or blank lines following configuration.
    'no_extra_consecutive_blank_lines' => true,

    // Remove leading slashes in use clauses.
    'no_leading_import_slash'                   => true,

    // The namespace declaration line shouldn't contain leading whitespace.
    'no_leading_namespace_whitespace'           => true,

    // Operator => should not be surrounded by multi-line whitespaces.
    'no_multiline_whitespace_around_double_arrow' => true,

    // Multi-line whitespace before closing semicolon are prohibited.
    'no_multiline_whitespace_before_semicolons' => true,

    // Replace short-echo <?= with long format <?php echo syntax.
    'no_short_echo_tag' => true,

    // Single-line whitespace before closing semicolon are prohibited.
    'no_singleline_whitespace_before_semicolons' => true,

    // Remove trailing commas in list function calls.
    'no_trailing_comma_in_list_call' => true,

    // PHP single-line arrays should not have trailing comma.
    'no_trailing_comma_in_singleline_array'     => true,

    // Unused use statements must be removed.
    'no_unused_imports'                         => true,

    // Remove trailing whitespace at the end of blank lines.
    'no_whitespace_in_blank_line' => true,

    // Logical NOT operators (!) should have one trailing whitespace.
    'not_operator_with_successor_space'         => true,

    // There should not be space before or after object T_OBJECT_OPERATOR ->.
    'object_operator_without_whitespace'        => true,

    //Ordering use statements.
    'ordered_imports'                           => [
        'importsOrder'  => null, // defines the order of import types
        'sortAlgorithm' => 'length', // whether the statements should be sorted alphabetically or by length; defaults to 'alpha'
    ],

    // Docblocks should have the same indentation as the documented subject.
    'phpdoc_indent' => true,

    // Fix phpdoc inline tags, make inheritdoc always inline.
    'phpdoc_inline_tag' => true,

    // @access annotations should be omitted from phpdocs.
    'phpdoc_no_access' => true,

    // @package and @subpackage annotations should be omitted from phpdocs.
    'phpdoc_no_package' => true,

    // Scalar types should always be written in the same form. int not integer, bool not boolean, float not real or double.
    'phpdoc_scalar' => true,

    // Phpdocs summary should end in either a full stop, exclamation mark, or question mark.
    'phpdoc_summary' => true,

    // Docblocks should only be used on structural elements.
    'phpdoc_to_comment' => true,

    // Phpdocs should start and end with content, excluding the very first and last line of the docblocks.
    'phpdoc_trim' => true,

    // @var and @type annotations should not contain the variable name.
    'phpdoc_var_without_name' => true,

    // Inside a classy element "self" should be preferred to the class name itself.
    'self_accessor'                             => true,

    // There should be exactly one blank line before a namespace declaration.
    'single_blank_line_before_namespace'        => true,

    // Convert double quotes to single quotes for simple strings.
    'single_quote'                              => true,

    // Replace all <> with !=.
    'standardize_not_equals'                    => true,

    // Standardize spaces around ternary operator.
    'ternary_operator_spaces'                   => true,

    // PHP multi-line arrays should have a trailing comma.
    'trailing_comma_in_multiline_array'         => true,

    // Arrays should be formatted like function/method arguments, without leading or trailing single line space.
    'trim_array_spaces'                         => true,

    // Unary operators should be placed adjacent to their operands.
    'unary_operator_spaces'                     => true,
 ];

return PhpCsFixer\Config::create()
    ->setUsingCache(false)
    ->setRules($rules)
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->exclude(['bin', 'vendor'])
            ->in(__DIR__)
    );
