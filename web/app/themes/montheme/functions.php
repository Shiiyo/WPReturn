<?php
require_once('functions/walker/CommentWalker.php');
require_once('functions/metaboxes/Sponso.php');
require_once('functions/menus/Menu.php');
require_once('functions/Supports.php');
require_once('functions/Assets.php');
require_once('functions/Title.php');
require_once('functions/Pagination.php');
require_once('functions/Init.php');
require_once('functions/options/Agence.php');
require_once('functions/Biens.php');
require_once('functions/Article.php');
require_once('functions/widgets/Widget.php');
require_once('functions/options/Apparence.php');


SponsoMetaBox::register();
Menu::register();
Support::register();
InsertAssets::register();
Title::register();
AppInit::register();
AgenceMenuPage::register();
Biens::register();
Article::register();
Widget::register();


add_action('after_switch_theme', 'flush_rewrite_rules');
add_action('switch_theme', 'flush_rewrite_rules');
