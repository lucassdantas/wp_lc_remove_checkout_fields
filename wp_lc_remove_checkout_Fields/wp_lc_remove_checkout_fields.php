<?php 
/*
 * Plugin Name:       Remove checkout fields
 * Plugin URI:        https://github.com/lucassdantas/wp_lc_remove_checkout_fields.git
 * Description:       Remove os campos do checkout e adiciona campos customizados
 * Version:           1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Lucas Dantas
 * Author URI:        https://www.linkedin.com/in/lucas-de-sousa-dantas/
 * License:           GPL v2 or later
 */


// Remove os campos padrão de endereço de faturamento e entrega
add_filter( 'woocommerce_checkout_fields', 'custom_override_checkout_fields' );
function custom_override_checkout_fields( $fields ) {
    unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_state']);
    unset($fields['billing']['billing_company']);
    unset($fields['shipping']['shipping_first_name']);
    unset($fields['shipping']['shipping_last_name']);
    unset($fields['shipping']['shipping_company']);
    unset($fields['shipping']['shipping_address_1']);
    unset($fields['shipping']['shipping_address_2']);
    unset($fields['shipping']['shipping_city']);
    unset($fields['shipping']['shipping_postcode']);
    unset($fields['shipping']['shipping_country']);
    unset($fields['shipping']['shipping_state']);
    
    // Adiciona os campos personalizados
    $fields['billing']['billing_email'] = array(
        'label'       => __('E-mail', 'woocommerce'),
        'placeholder' => _x('Seu e-mail', 'placeholder', 'woocommerce'),
        'required'    => true,
        'class'       => array('form-row-wide'),
        'clear'       => true
    );
    $fields['billing']['billing_full_name'] = array(
        'label'       => __('Nome Completo', 'woocommerce'),
        'placeholder' => _x('Seu nome completo', 'placeholder', 'woocommerce'),
        'required'    => true,
        'class'       => array('form-row-wide'),
        'clear'       => true
    );
    $fields['billing']['billing_cpf'] = array(
        'label'       => __('CPF', 'woocommerce'),
        'placeholder' => _x('Seu CPF', 'placeholder', 'woocommerce'),
        'required'    => true,
        'class'       => array('form-row-wide'),
        'clear'       => true
    );
    $fields['billing']['billing_phone'] = array(
        'label'       => __('Telefone', 'woocommerce'),
        'placeholder' => _x('Seu telefone', 'placeholder', 'woocommerce'),
        'required'    => true,
        'class'       => array('form-row-wide'),
        'clear'       => true
    );
    $fields['billing']['billing_postcode'] = array(
        'label'       => __('CEP', 'woocommerce'),
        'placeholder' => _x('Seu CEP', 'placeholder', 'woocommerce'),
        'required'    => true,
        'class'       => array('form-row-wide'),
        'clear'       => true
    );

    return $fields;
}