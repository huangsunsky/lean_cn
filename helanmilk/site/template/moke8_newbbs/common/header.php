<?php echo 'ħ�Ͱɳ�Ʒ-www.moke8.com';exit;?>

<!--{subtemplate common/header_common}-->



	<meta name="application-name" content="$_G['setting']['bbname']" />



	<meta name="msapplication-tooltip" content="$_G['setting']['bbname']" />



	<!--{if $_G['setting']['portalstatus']}--><meta name="msapplication-task" content="name=$_G['setting']['navs'][1]['navname'];action-uri={echo !empty($_G['setting']['domain']['app']['portal']) ? 'http://'.$_G['setting']['domain']['app']['portal'] : $_G[siteurl].'portal.php'};icon-uri={$_G[siteurl]}{IMGDIR}/portal.ico" /><!--{/if}-->



	<meta name="msapplication-task" content="name=$_G['setting']['navs'][2]['navname'];action-uri={echo !empty($_G['setting']['domain']['app']['forum']) ? 'http://'.$_G['setting']['domain']['app']['forum'] : $_G[siteurl].'forum.php'};icon-uri={$_G[siteurl]}{IMGDIR}/bbs.ico" />



	<!--{if $_G['setting']['groupstatus']}--><meta name="msapplication-task" content="name=$_G['setting']['navs'][3]['navname'];action-uri={echo !empty($_G['setting']['domain']['app']['group']) ? 'http://'.$_G['setting']['domain']['app']['group'] : $_G[siteurl].'group.php'};icon-uri={$_G[siteurl]}{IMGDIR}/group.ico" /><!--{/if}-->



	<!--{if helper_access::check_module('feed')}--><meta name="msapplication-task" content="name=$_G['setting']['navs'][4]['navname'];action-uri={echo !empty($_G['setting']['domain']['app']['home']) ? 'http://'.$_G['setting']['domain']['app']['home'] : $_G[siteurl].'home.php'};icon-uri={$_G[siteurl]}{IMGDIR}/home.ico" /><!--{/if}-->



	<!--{if $_G['basescript'] == 'forum' && $_G['setting']['archiver']}-->



		<link rel="archives" title="$_G['setting']['bbname']" href="{$_G[siteurl]}archiver/" />



	<!--{/if}-->



	<!--{if !empty($rsshead)}-->$rsshead<!--{/if}-->



	<!--{if $_G['basescript'] == 'forum' || $_G['basescript'] == 'group'}-->



		<script type="text/javascript" src="{$_G[setting][jspath]}forum.js?{VERHASH}"></script>



	<!--{elseif $_G['basescript'] == 'home' || $_G['basescript'] == 'userapp'}-->



		<script type="text/javascript" src="{$_G[setting][jspath]}home.js?{VERHASH}"></script>



	<!--{elseif $_G['basescript'] == 'portal'}-->



		<script type="text/javascript" src="{$_G[setting][jspath]}portal.js?{VERHASH}"></script>



	<!--{/if}-->



	<!--{if $_G['basescript'] != 'portal' && $_GET['diy'] == 'yes' && check_diy_perm($topic)}-->



		<script type="text/javascript" src="{$_G[setting][jspath]}portal.js?{VERHASH}"></script>



	<!--{/if}-->



	<!--{if $_GET['diy'] == 'yes' && check_diy_perm($topic)}-->



	<link rel="stylesheet" type="text/css" id="diy_common" href="data/cache/style_{STYLEID}_css_diy.css?{VERHASH}" />



	<!--{/if}-->



</head>







<body id="nv_{$_G[basescript]}" class="pg_{CURMODULE}{if $_G['basescript'] === 'portal' && CURMODULE === 'list' && !empty($cat)} {$cat['bodycss']}{/if}" onkeydown="if(event.keyCode==27) return false;">



	<div id="append_parent"></div><div id="ajaxwaitid"></div>



	<!--{if $_GET['diy'] == 'yes' && check_diy_perm($topic)}-->



		<!--{template common/header_diy}-->



	<!--{/if}-->



	<!--{if check_diy_perm($topic)}-->



		<!--{block diynav}-->



			


			<div id="diy-tg_menu" style="display: none;">



				<ul>



					<li><a href="javascript:saveUserdata('diy_advance_mode', '');openDiy();" class="xi2">{lang header_diy_mode_simple}</a></li>



					<li><a href="javascript:saveUserdata('diy_advance_mode', '1');openDiy();" class="xi2">{lang header_diy_mode_adv}</a></li>



				</ul>



			</div>



		<!--{/block}-->



	<!--{/if}-->



	<!--{if CURMODULE == 'topic' && $topic && empty($topic['useheader']) && check_diy_perm($topic)}-->



		$diynav



	<!--{/if}-->



	<!--{if empty($topic) || $topic['useheader']}-->



		<!--{if $_G['setting']['mobile']['allowmobile'] && (!$_G['setting']['cacheindexlife'] && !$_G['setting']['cachethreadon'] || $_G['uid']) && ($_GET['diy'] != 'yes' || !$_GET['inajax']) && ($_G['mobile'] != '' && $_G['cookie']['mobile'] == '' && $_GET['mobile'] != 'no')}-->



			<div class="xi1 bm bm_c">



			    {lang your_mobile_browser}<a href="{$_G['siteurl']}forum.php?mobile=yes">{lang go_to_mobile}</a> <span class="xg1">|</span> <a href="$_G['setting']['mobile']['nomobileurl']">{lang to_be_continue}</a>



			</div>



		<!--{/if}-->




	<div id="toptb" class="cl">
    
			<!--{hook/global_cpnav_top}-->
			<div class="wp">
				<div class="z">
					<!--{loop $_G['setting']['topnavs'][0] $nav}-->
						<!--{if $nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))}-->$nav[code]<!--{/if}-->
					<!--{/loop}-->
                    <!--{if $_G['uid'] && !empty($_G['style']['extstyle'])}--><a id="sslct" href="javascript:;" onMouseOver="delayShow(this, function() {showMenu({'ctrlid':'sslct','pos':'34!'})});">{lang changestyle}</a><!--{/if}-->
                    <!--{if !empty($_G['style']['extstyle'])}-->
				<div id="sslct_menu" class="cl p_pop" style="display: none;">
					<!--{if !$_G[style][defaultextstyle]}--><span class="sslct_btn" onClick="extstyle('')" title="{lang default}"><i></i></span><!--{/if}-->
					<!--{loop $_G['style']['extstyle'] $extstyle}-->
						<span class="sslct_btn" onClick="extstyle('$extstyle[0]')" title="$extstyle[1]"><i style='background:$extstyle[2]'></i></span>
					<!--{/loop}-->
				</div>
			<!--{/if}-->
					<!--{hook/global_cpnav_extra1}-->
				</div>
				<div class="y">
					<!--{subtemplate common/pubsearchformtop}-->
					<!--{hook/global_cpnav_extra2}-->
					<!--{loop $_G['setting']['topnavs'][1] $nav}-->
						<!--{if $nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))}-->$nav[code]<!--{/if}-->
					<!--{/loop}-->
					
					
					<!--{if check_diy_perm($topic)}-->
						$diynav
					<!--{/if}-->
				</div>
			</div>
		</div>


		







		<!--{ad/headerbanner/wp a_h}-->



		<div id="hd">

           <div class="hdbg">

			<div class="wp">



				<div class="hdc cl">



					<!--{eval $mnid = getcurrentnav();}-->



					<div class="logo"><!--{if !isset($_G['setting']['navlogos'][$mnid])}--><a href="./" title="$_G['setting']['bbname']">{$_G['style']['boardlogo']}</a><!--{else}-->$_G['setting']['navlogos'][$mnid]<!--{/if}--></div>



                     

  <div id="topNav" class="nav">

     <!--{loop $_G['setting']['navs'] $nav}-->
							<!--{if $nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))}--><li {if $mnid == $nav[navid]}class="current" {/if}$nav[nav]></li><!--{/if}-->
						<!--{/loop}-->

  </div>



					<!--{if $_G['uid']}-->



					<div id="um">



						<div class="avt y"><a href="home.php?mod=space&uid=$_G[uid]"><!--{avatar($_G[uid],small)}--></a></div>



						<div class="diynav">


							<!--{hook/global_usernav_extra1}-->



							<!--{eval $upgradecredit = $_G['uid'] && $_G['group']['grouptype'] == 'member' && $_G['group']['groupcreditslower'] != 999999999 ? $_G['group']['groupcreditslower'] - $_G['member']['credits'] : false;}-->

                             <!--{if $_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)}-->

                                      

								<a href="admin.php" target="_blank">{lang admincp}</a> <a id="diy-tg" href="javascript:openDiy();" title="{lang open_diy}" class="xi1 xw1" onMouseMove="showMenu(this.id)"><img src="{STATICURL}image/diy/panel-toggle.png" alt="DIY" /></a>
 <!--{/if}--><a href="home.php?mod=spacecp&ac=credit&showcredit=1" id="extcreditmenu">{lang credits}: $_G[member][credits]</a> <span class="pipe">|</span>

                                
                                <a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a>


						</div>



						<p>



							<!--{hook/global_usernav_extra2}-->



							<a href="home.php?mod=space&do=pm" id="pm_ntc"{if $_G[member][newpm]} class="new"{/if}>{lang pm_center}</a>



							<span class="pipe">|</span><a href="home.php?mod=space&do=notice" id="myprompt"{if $_G[member][newprompt]} class="new"{/if}>{lang remind}<!--{if $_G[member][newprompt]}-->($_G[member][newprompt])<!--{/if}--></a><span id="myprompt_check"></span>



							<!--{if $_G['setting']['taskon'] && !empty($_G['cookie']['taskdoing_'.$_G['uid']])}--><span class="pipe">|</span><a href="home.php?mod=task&item=doing" id="task_ntc" class="new">{lang task_doing}</a>



							<!--{/if}-->



							<span class="pipe">|</span><a href="home.php?mod=space&uid=$_G[uid]" target="_blank" title="{lang visit_my_space}" >{$_G[member][username]}</a>



							<ul id="umnav_menu" class="p_pop nav_pop" style="display: none;">



								<!--{loop $_G['setting']['mynavs'] $nav}-->



									<!--{if $nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))}-->



										{eval $nav[code] = str_replace('style="', '_style="', $nav[code]);}



										<li>$nav[code]</li>



									<!--{/if}-->



								<!--{/loop}-->



								<!--{hook/global_usernav_extra3}-->



								<li><a href="home.php?mod=spacecp">{lang setup}</a></li>



								<!--{if ($_G['group']['allowmanagearticle'] || $_G['group']['allowpostarticle'] || $_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 6) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3))}-->



									<li><a href="portal.php?mod=portalcp"><!--{if $_G['setting']['portalstatus'] }-->{lang portal_manage}<!--{else}-->{lang portal_block_manage}<!--{/if}--></a></li>



								<!--{/if}-->



								<!--{if $_G['uid'] && $_G['group']['radminid'] > 1}-->



									<li><a href="forum.php?mod=modcp&fid=$_G[fid]" target="_blank">{lang forum_manager}</a></li>



								<!--{/if}-->



								<!--{if $_G['uid'] && $_G['adminid'] == 1 && $_G['setting']['cloud_status']}-->



									<li><a href="admin.php?frames=yes&action=cloud&operation=applist" target="_blank">{lang cloudcp}</a></li>



								<!--{/if}-->



								<!--{if $_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)}-->



									<li><a href="admin.php" target="_blank">{lang admincp}</a></li>



								<!--{/if}-->



								<!--{hook/global_usernav_extra4}-->



								<li><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a></li>



							</ul>



						</p>



					</div>



					<!--{elseif !empty($_G['cookie']['loginuser'])}-->



					<p>



						<strong><a id="loginuser" class="noborder"><!--{echo dhtmlspecialchars($_G['cookie']['loginuser'])}--></a></strong>



						<span class="pipe">|</span><a href="member.php?mod=logging&action=login" onClick="showWindow('login', this.href)">{lang activation}</a>



						<span class="pipe">|</span><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a>



					</p>



					<!--{elseif !$_G[connectguest]}-->

                    

                   <script type="text/javascript" src="template/moke8_newbbs/image/login.js"></script>

					<!--{else}-->



					<div id="um">



						<div class="avt y"><!--{avatar(0,small)}--></div>



						<p>



							<strong class="vwmy qq">{$_G[member][username]}</strong>



							<!--{hook/global_usernav_extra1}-->



							<span class="pipe">|</span><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a>



						</p>



						<p>



							<a href="home.php?mod=spacecp&ac=credit&showcredit=1">{lang credits}: 0</a>



							<span class="pipe">|</span>{lang usergroup}: $_G[group][grouptitle]



						</p>



					</div>



					<!--{/if}-->



				</div>





				<!--{if !empty($_G['setting']['plugins']['jsmenu'])}-->



					<ul class="p_pop h_pop" id="plugin_menu" style="display: none">



					<!--{loop $_G['setting']['plugins']['jsmenu'] $module}-->



						 <!--{if !$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])}-->



						 <li>$module[url]</li>



						 <!--{/if}-->



					<!--{/loop}-->



					</ul>



				<!--{/if}-->



				$_G[setting][menunavs]



				<div id="mu" class="cl">



				<!--{if $_G['setting']['subnavs']}-->



					<!--{loop $_G[setting][subnavs] $navid $subnav}-->



						<!--{if $_G['setting']['navsubhover'] || $mnid == $navid}-->



						<ul class="cl {if $mnid == $navid}current{/if}" id="snav_$navid" style="display:{if $mnid != $navid}none{/if}">



						$subnav



						</ul>



						<!--{/if}-->



					<!--{/loop}-->



				<!--{/if}-->



				</div>



				<!--{ad/subnavbanner/a_mu}-->



				
                    <div style="height:18px;"></div>



			</div>
            
    <!--{if $mnid == 'mn_portal' or $mnid == 'mn_forum' }-->
       
    <!--{else}-->

        </div>
        </div>
        <div id="wp" class="wp">

	<!--{/if}-->
 <!--{/if}-->
    <!--{hook/global_header}-->