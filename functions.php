<?php
function enqueue_styles_child_theme()
{

	$parent_style = 'twentynineteen-style';
	$child_style  = 'twentynineteen-child-style';

	wp_enqueue_style(
		$parent_style,
		get_template_directory_uri() . '/style.css'
	);

	wp_enqueue_style(
		$child_style,
		get_stylesheet_directory_uri() . '/style.css',
		array($parent_style),
		wp_get_theme()->get('Version')
	);
}
add_action('wp_enqueue_scripts', 'enqueue_styles_child_theme');

function salvar_post()
{
	/* echo "<pre>";
	print_r($_POST);
	echo "</pre>";  */
	$_POST['acf']['field_6050c8e599601'] = 1;
	// generar num aleatorio univoco de letras y numeros de longitud 32
	// parametro de cuantos caracteres deberia tener


	/* echo "<pre>";
	print_r($_POST);
	echo "</pre>"; */
	$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';

	echo substr(str_shuffle($permitted_chars), 0, 32);
}
add_action('save_post', 'salvar_post', 10, 3);

if (function_exists('acf_add_local_field_group')) :

	acf_add_local_field_group(array(
		'key' => 'group_604641e71135d',
		'title' => 'Mascota',
		'fields' => array(
			array(
				'key' => 'field_6050c8e599601',
				'label' => 'id',
				'name' => 'id',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_60464201bd635',
				'label' => 'Nombre de la Mascota',
				'name' => 'nombre',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => 'Nombre',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_60464298bd636',
				'label' => 'Tipo',
				'name' => 'tipo',
				'type' => 'select',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'perro' => 'Perro',
					'gato' => 'Gato',

				),
				'allow_null' => 0,
				'other_choice' => 0,
				'default_value' => '',
				'layout' => 'vertical',
				'return_format' => 'value',
				'save_other_choice' => 0,
			),
			array(
				'key' => 'field_604642ffbd637',
				'label' => 'Sexo',
				'name' => 'sexo',
				'type' => 'radio',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'Macho' => 'Macho',
					'Hembra' => 'Hembra',
				),
				'allow_null' => 0,
				'other_choice' => 0,
				'default_value' => '',
				'layout' => 'vertical',
				'return_format' => 'value',
				'save_other_choice' => 0,
			),
			array(
				'key' => 'field_60464333bd638',
				'label' => 'Mapa',
				'name' => 'mapa',
				'type' => 'google_map',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'center_lat' => '-4.7088060',
				'center_lng' => '41.3016116',
				'zoom' => '',
				'height' => '',
			),
			array(
				'key' => 'field_60464353bd639',
				'label' => 'User',
				'name' => 'user',
				'type' => 'user',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'role' => '',
				'allow_null' => 0,
				'multiple' => 0,
				'return_format' => 'array',
			),
			array(
				'key' => 'field_6046438bbd63a',
				'label' => 'Chip',
				'name' => 'chip',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => 'Chip',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_604643a9bd63b',
				'label' => 'Foto',
				'name' => 'foto',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'array',
				'preview_size' => 'medium',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
			array(
				'key' => 'field_604643c1bd63c',
				'label' => 'Raza',
				'name' => 'raza',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => 'Raza',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_604643dcbd63d',
				'label' => 'qr',
				'name' => 'qr',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'array',
				'preview_size' => 'medium',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
			array(
				'key' => 'field_604643f0bd63e',
				'label' => 'Nombre Dueño',
				'name' => 'nombre_dueno',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => 'Nombre Dueño',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_6046444bbd63f',
				'label' => 'Apellidos',
				'name' => 'apellidos',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_60464458bd640',
				'label' => 'RUT',
				'name' => 'rut',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_60464464bd641',
				'label' => 'Telefono',
				'name' => 'telefono',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_60464470bd642',
				'label' => 'Email',
				'name' => 'email',
				'type' => 'email',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'mascotas',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',

	));

endif;
