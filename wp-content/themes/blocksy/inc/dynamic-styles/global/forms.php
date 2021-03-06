<?php

$forms_type = get_theme_mod('forms_type', 'classic-forms');

if ($forms_type === 'classic-forms') {
	$css->put(
		':root',
		'--has-classic-forms: var(--true)'
	);

	$css->put(
		':root',
		'--has-modern-forms: var(--false)'
	);
} else {
	$css->put(
		':root',
		'--has-classic-forms: var(--false)'
	);

	$css->put(
		':root',
		'--has-modern-forms: var(--true)'
	);
}

// general
blocksy_output_colors([
	'value' => get_theme_mod('formTextColor'),
	'default' => [
		'default' => [ 'color' => Blocksy_Css_Injector::get_skip_rule_keyword('DEFAULT') ],
		'focus' => [ 'color' => Blocksy_Css_Injector::get_skip_rule_keyword('DEFAULT') ],
	],
	'css' => $css,
	'variables' => [
		'default' => [
			'selector' => ':root',
			'variable' => 'form-text-initial-color'
		],

		'focus' => [
			'selector' => ':root',
			'variable' => 'form-text-focus-color'
		],
	],
]);

$formFontSize = get_theme_mod('formFontSize', 15);

if ($formFontSize !== 15) {
	$css->put(':root', '--form-font-size: ' . $formFontSize . 'px');
}

blocksy_output_colors([
	'value' => get_theme_mod('formBackgroundColor'),
	'default' => [
		'default' => [ 'color' => Blocksy_Css_Injector::get_skip_rule_keyword() ],
		'focus' => [ 'color' => Blocksy_Css_Injector::get_skip_rule_keyword() ],
	],
	'css' => $css,
	'variables' => [
		'default' => [
			'selector' => ':root',
			'variable' => 'form-field-initial-background'
		],

		'focus' => [
			'selector' => ':root',
			'variable' => 'form-field-focus-background'
		],
	],
]);

$formInputHeight = get_theme_mod( 'formInputHeight', 40 );

if ($formInputHeight !== 40) {
	$css->put( ':root', '--form-field-height: ' . $formInputHeight . 'px' );
}


$formTextAreaHeight = get_theme_mod( 'formTextAreaHeight', 170 );
$css->put( 'form textarea', '--form-field-height: ' . $formTextAreaHeight . 'px' );


$formFieldBorderRadius = get_theme_mod( 'formFieldBorderRadius', 3 );

if ($formFieldBorderRadius !== 3) {
	$css->put( ':root', '--form-field-border-radius: ' . $formFieldBorderRadius . 'px' );
}


blocksy_output_colors([
	'value' => get_theme_mod('formBorderColor'),
	'default' => [
		'default' => [ 'color' => 'var(--border-color)' ],
		'focus' => [ 'color' => 'var(--paletteColor1)' ],
	],
	'css' => $css,
	'variables' => [
		'default' => [
			'selector' => ':root',
			'variable' => 'form-field-border-initial-color'
		],

		'focus' => [
			'selector' => ':root',
			'variable' => 'form-field-border-focus-color'
		],
	],
]);

$formBorderSize = get_theme_mod( 'formBorderSize', 1 );

if ($forms_type === 'classic-forms') {
	$css->put(
		':root',
		'--form-field-border-width: ' . $formBorderSize . 'px'
	);
} else {
	$css->put(
		':root',
		'--form-field-border-width: 0 0 ' . $formBorderSize . 'px 0'
	);
}

// radio & checkbox
blocksy_output_colors([
	'value' => get_theme_mod('radioCheckboxColor'),
	'default' => [
		'default' => [ 'color' => 'var(--border-color)' ],
		'accent' => [ 'color' => 'var(--paletteColor1)' ],
	],
	'css' => $css,
	'variables' => [
		'default' => [
			'selector' => ':root',
			'variable' => 'radioCheckboxInitialColor'
		],

		'accent' => [
			'selector' => ':root',
			'variable' => 'radioCheckboxAccentColor'
		],
	],
]);

