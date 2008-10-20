<?php
/***********************************************************************

  Copyright (C) 2002-2008  PunBB

  Partially based on code copyright (C) 2008  FluxBB.org

  This file is part of PunBB.

  PunBB is free software; you can redistribute it and/or modify it
  under the terms of the GNU General Public License as published
  by the Free Software Foundation; either version 2 of the License,
  or (at your option) any later version.

  PunBB is distributed in the hope that it will be useful, but
  WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 59 Temple Place, Suite 330, Boston,
  MA  02111-1307  USA

************************************************************************/


// Make sure no one attempts to run this script "directly"
if (!defined('FORUM'))
	exit;

// These are the simple file based SEF URLs
$forum_url = array(
	'insertion_find'				=>  '.html',
	'insertion_replace'				=>  '-$1.html',
	'change_email'					=>	'change-email$1.html',
	'change_email_key'				=>	'change-email$1-$2.html',
	'change_password'				=>	'change-password$1.html',
	'change_password_key'			=>	'change-password$1-$2.html',
	'delete_user'					=>	'delete-user$1.html',
	'delete'						=>	'delete$1.html',
	'delete_avatar'					=>	'delete-avatar$1-$2.html',
	'edit'							=>	'edit$1.html',
	'email'							=>	'email$1.html',
	'forum'							=>	'forum$1.html',
	'forum_rss'						=>	'forum$1-rss.xml',
	'forum_atom'					=>	'forum$1-atom.xml',
	'help'							=>	'help-$1.html',
	'index'							=>	'',
	'index_rss'						=>	'feed-rss.xml',
	'index_atom'					=>	'feed-atom.xml',
	'login'							=>	'login.html',
	'logout'						=>	'logout$1-$2.html',
	'mark_read'						=>	'mark-read-$1.html',
	'mark_forum_read'				=>	'mark-forum$1-read-$2.html',
	'new_topic'						=>	'new-topic$1.html',
	'new_reply'						=>	'new-reply$1.html',
	'post'							=>	'post$1.html#p$1',
	'profile_about'					=>	'user$1-about.html',
	'profile_identity'				=>	'user$1-identity.html',
	'profile_settings'				=>	'user$1-settings.html',
	'profile_avatar'				=>	'user$1-avatar.html',
	'profile_signature'				=>	'user$1-signature.html',
	'profile_admin'					=>	'user$1-admin.html',
	'quote'							=>	'new-reply$1quote$2.html',
	'register'						=>	'register.html',
	'report'						=>	'report$1.html',
	'request_password'				=>	'request-password.html',
	'rules'							=>	'rules.html',
	'search'						=>	'search.html',
	'search_resultft'				=>	'search-k$1-$4-a$3-$5-$6-$2-$7.html',
	'search_results'				=>	'search$1.html',
	'search_new'					=>	'search-new.html',
	'search_24h'					=>	'search-recent.html',
	'search_unanswered'				=>	'search-unanswered.html',
	'search_subscriptions'			=>	'search-subscriptions$1.html',
	'search_user_posts'				=>	'search-posts-user$1.html',
	'search_user_topics'			=>	'search-topics-user$1.html',
	'subscribe'						=>	'subscribe$1-$2.html',
	'topic'							=>	'topic$1.html',
	'topic_rss'						=>	'topic$1-rss.xml',
	'topic_atom'					=>	'topic$1-atom.xml',
	'topic_new_posts'				=>	'topic$1new-posts.html',
	'topic_last_post'				=>	'topic$1last-post.html',
	'unsubscribe'					=>	'unsubscribe$1-$2.html',
	'user'							=>	'user$1.html',
	'users'							=>	'users.html',
	'users_browse'					=>	'users/$4/$1$2-$3.html',
	'page'							=>	'p$1',
	'moderate'						=>	'moderate.html',
	'moderate_forum'				=>	'moderate$1.html',
	'get_host'						=>	'get_host$1.html',
	'move'							=>	'move_topics$1-$2.html',
	'open'							=>	'open$1-$2-$3.html',
	'close'							=>	'close$1-$2-$3.html',
	'stick'							=>	'stick$1-$2-$3.html',
	'unstick'						=>	'unstick$1-$2-$3.html',
	'delete_multiple'				=>	'moderate$1-$2.html',
	'admin_index'					=>	'admin/index.php',
	'admin_bans'					=>	'admin/bans.php',
	'admin_categories'				=>	'admin/categories.php',
	'admin_censoring'				=>	'admin/censoring.php',
	'admin_extensions_manage'		=>	'admin/extensions.php?section=manage',
	'admin_extensions_install'		=>	'admin/extensions.php?section=install',
	'admin_forums'					=>	'admin/forums.php',
	'admin_groups'					=>	'admin/groups.php',
	'admin_loader'					=>	'admin/loader.php',
	'admin_reindex'					=>	'admin/reindex.php',
	'admin_settings_setup'			=>	'admin/settings.php?section=setup',
	'admin_settings_features'		=>	'admin/settings.php?section=features',
	'admin_settings_content'			=>	'admin/settings.php?section=content',
	'admin_settings_email'			=>	'admin/settings.php?section=email',
	'admin_settings_announcements'	=>	'admin/settings.php?section=announcements',
	'admin_settings_registration'	=>	'admin/settings.php?section=registration',
	'admin_settings_communications'	=>	'admin/settings.php?section=communications',
	'admin_settings_maintenance'		=>	'admin/settings.php?section=maintenance',
	'admin_prune'					=>	'admin/prune.php',
	'admin_ranks'					=>	'admin/ranks.php',
	'admin_reports'					=>	'admin/reports.php',
	'admin_users'					=>	'admin/users.php'
);
