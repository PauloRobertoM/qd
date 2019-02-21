<?php if (! defined('ABSPATH')) exit('No direct script access allowed');

class Infograficos {

   public function __construct() {
      add_action('init', array($this, 'init'), 0);
      add_filter('rwmb_meta_boxes', array($this, 'infograficos_register_meta_boxes'));
   }

   public function init() {
      $this->infograficos_post_type();
   }

   public function infograficos_post_type() {

      $labels = array(
         'name'                => _x( 'Infográficos', 'Post Type General Name', 'text_domain' ),
         'singular_name'       => _x( 'Infográfico', 'Post Type Singular Name', 'text_domain' ),
         'menu_name'           => __( 'Infográficos', 'text_domain' ),
         'name_admin_bar'      => __( 'Infográficos', 'text_domain' ),
         'parent_item_colon'   => __( 'Infográfico pai:', 'text_domain' ),
         'all_items'           => __( 'Todos os infograficos', 'text_domain' ),
         'add_new_item'        => __( 'Adicionar novo infografico', 'text_domain' ),
         'add_new'             => __( 'Adicionar novo', 'text_domain' ),
         'new_item'            => __( 'Novo infografico', 'text_domain' ),
         'edit_item'           => __( 'Ediar infografico', 'text_domain' ),
         'update_item'         => __( 'Atualizar infografico', 'text_domain' ),
         'view_item'           => __( 'Ver infografico', 'text_domain' ),
         'search_items'        => __( 'Procurar infografico', 'text_domain' ),
         'not_found'           => __( 'Não encontrado', 'text_domain' ),
         'not_found_in_trash'  => __( 'Não encontrado na lixeira', 'text_domain' ),
      );
      $args = array(
         'label'               => __( 'infograficos', 'text_domain' ),
         'description'         => __( 'Cadastro dos infograficos', 'text_domain' ),
         'labels'              => $labels,
         'supports'            => array( 'title', 'editor', ),
         'taxonomies'          => array( ),
         'hierarchical'        => false,
         'public'              => true,
         'show_ui'             => true,
         'show_in_menu'        => true,
         'menu_position'       => 5,
         'show_in_admin_bar'   => true,
         'show_in_nav_menus'   => true,
         'can_export'          => true,
         'has_archive'         => true,
         'exclude_from_search' => false,
         'publicly_queryable'  => true,
         'capability_type'     => 'page',
      );
      register_post_type( 'infograficos', $args );
   }

   public function infograficos_register_meta_boxes( $meta_boxes ) {
      return $meta_boxes;
   }

}