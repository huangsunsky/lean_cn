<?php echo 'ħ�Ͱɳ�Ʒ-www.moke8.com';exit;?>
<!--{subtemplate common/header}-->

<!--{if $_G['forum']['ismoderator']}-->
	<script type="text/javascript" src="{$_G[setting][jspath]}forum_moderate.js?{VERHASH}"></script>
<!--{/if}-->
<style id="diy_style" type="text/css"></style>
<!--[diy=diynavtop]--><div id="diynavtop" class="area"></div><!--[/diy]-->
</div>
<section class="small_banner">
   <div class="center-wrap">
      <p class="page-banner-heading">$_G['forum'][name]</p>
      <div id="banner-search">
      
         <form id="scbar_form" method="{if $_G[fid] && !empty($searchparams[url])}get{else}post{/if}" autocomplete="off" onsubmit="searchFocus($('scbar_txt'))" action="{if $_G[fid] && !empty($searchparams[url])}$searchparams[url]{else}search.php?searchsubmit=yes{/if}" target="_blank" class="searchform">
            <fieldset>
               <input type="text" onblur="if(this.value=='')this.value='Search...';" onfocus="if(this.value=='Search...')this.value='';" value="Search..." class="s" name="s" name="srchtxt" id="scbar_txt" x-webkit-speech speech />
            </fieldset>
            <button type="submit" name="searchsubmit" id="scbar_btn" sc="1" class="pn pnc" value="true"><strong class="xi2 xs2">{lang search}</strong></button>
         </form>
      </div>
      <!-- END banner-search -->
      
      <div class="breadcrumbs">
      <a href="./" title="{lang homepage}">$_G[setting][bbname]</a> �� <a href="forum.php"{if $_G['setting']['forumjump']} id="fjump" onmouseover="delayShow(this, 'showForummenu($_G[fid])');" class="showmenu"{/if}>{$_G[setting][navs][2][navname]}</a>$navigation
     
     </span>
      </div>
      <!-- END breadcrumbs -->
   </div>
   <!-- END center-wrap -->
   
   <div class="shadow top"></div>
   <div class="shadow bottom"></div>
   <div class="tt-overlay"></div>
</section>
<div class="wp" id="wp" style="margin-top:10px;">

<!--{ad/text/wp a_t}-->
<div class="wp">
	<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>
<div class="boardnav">
	<div id="ct" class="wp cl{if $_G['forum']['allowside']} ct2{/if}"{if $leftside} style="margin-left:{$_G['leftsidewidth_mwidth']}px"{/if}>
		<!--{if $leftside}-->
			<div id="sd_bdl" class="bdl" onmouseover="showMenu({'ctrlid':this.id, 'pos':'dz'});" style="width:{$_G['setting']['leftsidewidth']}px;margin-left:-{$_G['leftsidewidth_mwidth']}px">
				<!--{hook/forumdisplay_leftside_top}-->
				<!--[diy=diyleftsidetop]--><div id="diyleftsidetop" class="area"></div><!--[/diy]-->

				<div class="tbn" id="forumleftside">
					<!--{subtemplate forum/forumdisplay_leftside}-->
				</div>

				<!--[diy=diyleftsidebottom]--><div id="diyleftsidebottom" class="area"></div><!--[/diy]-->
				<!--{hook/forumdisplay_leftside_bottom}-->
			</div>
		<!--{/if}-->

		<div class="mn">
			<div class="bm bml pbn">
				<!--{if $_G[forum][banner] && !$subforumonly}--><img src="$_G[forum][banner]" alt="$_G['forum'][name]" /><!--{/if}-->
				<div class="bm_h cl">
					<!--{if $_G['page'] == 1 && $_G['forum']['rules']}--><span class="o"><img id="forum_rules_{$_G[fid]}_img" src="{IMGDIR}/collapsed_{$collapse[forum_rulesimg]}.gif" title="{lang spread}" alt="{lang spread}" onclick="toggle_collapse('forum_rules_{$_G[fid]}')" /></span><!--{/if}-->
					<span class="y">
						<a href="home.php?mod=spacecp&ac=favorite&type=forum&id=$_G[fid]&handlekey=favoriteforum" id="a_favorite" class="fa_fav" onclick="showWindow(this.id, this.href, 'get', 0);">{lang forum_favorite}</a>
						<!--{if rssforumperm($_G['forum']) && $_G[setting][rssstatus] && !$_GET['archiveid'] && !$subforumonly}--><span class="pipe">|</span><a href="forum.php?mod=rss&fid=$_G[fid]&auth=$rssauth" class="fa_rss" target="_blank" title="RSS">{lang rss_subscribe_this}</a><!--{/if}-->
						<!--{if !empty($forumarchive)}-->
							<span class="pipe">|</span><a id="forumarchive" href="javascript:;" class="fa_achv" onmouseover="showMenu(this.id)"><!--{if $_GET['archiveid']}-->$forumarchive[$_GET['archiveid']]['displayname']<!--{else}-->{lang forum_archive}<!--{/if}--></a>
						<!--{/if}-->
						<!--{hook/forumdisplay_forumaction}-->

						<!--{if $_G['forum']['ismoderator']}-->
						<!--{if $_G['forum']['recyclebin']}-->
							<span class="pipe">|</span><a href="{if $_G['adminid'] == 1}admin.php?mod=forum&action=recyclebin&frames=yes{elseif $_G['forum']['ismoderator']}forum.php?mod=modcp&action=recyclebin&fid=$_G[fid]{/if}" class="fa_bin" target="_blank">{lang forum_recyclebin}</a>
						<!--{/if}-->
						<!--{if $_G['forum']['ismoderator'] && !$_GET['archiveid']}-->
							<span class="pipe">|</span><strong>
							<!--{if $_G['forum']['status'] != 3}-->
								<a href="forum.php?mod=modcp&fid=$_G[fid]">{lang modcp}</a>
							<!--{else}-->
								<a href="forum.php?mod=group&action=manage&fid=$_G[fid]">{lang modcp}</a>
							<!--{/if}-->
							</strong>
						<!--{/if}-->
						<!--{hook/forumdisplay_modlink}-->
						<!--{/if}-->
					</span>
					<h1 class="xs2">
						<a href="forum.php?mod=forumdisplay&fid=$_G[fid]">$_G['forum'][name]</a>
						<!--{if !$subforumonly}--><span class="xs1 xw0 i">{lang index_today}: <strong class="xi1">$_G[forum][todayposts]</strong><span class="pipe">|</span>{lang index_threads}: <strong class="xi1">$_G[forum][threads]</strong></span><!--{/if}-->
					</h1>
				</div>
				<!--{if (!empty($_G[forum][domain]) && !empty($_G['setting']['domain']['root']['forum'])) || $moderatedby || ($_G['page'] == 1 && $_G['forum']['rules'])}-->
					<div class="bm_c cl pbn">
						<!--{if !empty($_G[forum][domain]) && !empty($_G['setting']['domain']['root']['forum'])}-->
							<div class="pbn">{lang forum_domain}: <a href="http://{$_G[forum][domain]}.{$_G['setting']['domain']['root']['forum']}" id="group_link">http://{$_G[forum][domain]}.{$_G['setting']['domain']['root']['forum']}</a></div>
						<!--{/if}-->
						<!--{if $moderatedby}--><div>{lang forum_modedby}: <span class="xi2">$moderatedby</span></div><!--{/if}-->
						<!--{if $_G['page'] == 1 && $_G['forum']['rules']}-->
							<div id="forum_rules_{$_G[fid]}" style="$collapse['forum_rules'];">
								<div class="ptn xg2">$_G['forum'][rules]</div>
							</div>
						<!--{/if}-->
					</div>
				<!--{/if}-->
				<!--{if !empty($forumarchive)}-->
					<div id="forumarchive_menu" class="p_pop" style="display:none">
						<ul>
							<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]">{lang threads_all}</a></li>
							<!--{loop $forumarchive $id $info}-->
							<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&archiveid=$id">{$info['displayname']} ({$info['threads']})</a></li>
							<!--{/loop}-->
						</ul>
					</div>
				<!--{/if}-->
			</div>

			<!--{hook/forumdisplay_top}-->

			<!--{if $subexists && $_G['page'] == 1}--><!--{template forum/forumdisplay_subforum}--><!--{/if}-->

			<div class="drag">
				<!--[diy=diy4]--><div id="diy4" class="area"></div><!--[/diy]-->
			</div>

			<!--{if !empty($_G['forum']['recommendlist'])}-->
				<div class="bm bmw">
					<div class="bm_h cl">
						<h2>{lang forum_recommend}</h2>
					</div>
					<div class="bm_c cl">
						<!--{subtemplate forum/recommend}-->
					</div>
				</div>
			<!--{/if}-->

			<!--{hook/forumdisplay_middle}-->

			<!--{if !$subforumonly}-->

				<!--{if $recommendgroups && !$_G['forum']['allowside']}-->
				<div class="bm bmw fl{if $_G['forum']['forumcolumns']} flg{/if}">
					<div class="bm_h cl">
						<span class="o"><img id="recommendgroups_{$_G[forum][fid]}_img" src="{IMGDIR}/$collapseimg[recommendgroups]" title="{lang spread}" alt="{lang spread}" onclick="toggle_collapse('recommendgroups_{$_G[forum][fid]}');" /></span>
						<h2>{lang recommended_groups}</h2>
					</div>
					<div class="bm_c" id="recommendgroups_{$_G[forum][fid]}" style="$collapse[recommendgroups]">
						<table cellspacing="0" cellpadding="0" class="fl_tb">
							<!--{loop $recommendgroups $key $group}-->
							<!--{if $_G['forum']['forumcolumns']}-->
								<!--{if $key && ($key % $_G['forum']['forumcolumns'] == 0)}-->
									</tr>
									<!--{if $key < $_G['forum']['forumcolumns']}-->
										<tr class="fl_row">
									<!--{/if}-->
								<!--{/if}-->
								<td class="fl_g">
									<div class="fl_icn_g">
										<a href="forum.php?mod=group&fid=$group[fid]" title="$group[name]" target="_blank"><img src="$group[icon]" alt="$group[name]" width="32" /></a>
									</div>
									<dl>
										<dt><a href="forum.php?mod=group&fid=$group[fid]" target="_blank">$group[name]</a><span class="xg1 xw0"> ($group[membernum] {lang activity_member_unit})</span>
										<dd><em>{lang forum_threads}: $group[threads]</em></dd>
										<dd>
											<!--{if is_array($group['lastpost'])}-->
												<!--{if $_G['forum']['forumcolumns'] < 3}-->
												<a href="forum.php?mod=redirect&tid=$group[lastpost][tid]&goto=lastpost#lastpost" class="xi2"><!--{echo cutstr($group[lastpost][subject], 30)}--></a> <cite>$group[lastpost][dateline] <!--{if $group['lastpost']['author']}--><a href="home.php?mod=space&username={$group[lastpost][encode_author]}">{$group[lastpost][author]}</a><!--{else}-->$_G[setting][anonymoustext]<!--{/if}--></cite>
												<!--{else}-->
													<a href="forum.php?mod=redirect&tid=$group[lastpost][tid]&goto=lastpost#lastpost" class="xi2">$group[lastpost][dateline]</a>
												<!--{/if}-->				<!--{else}-->
											{lang never}
											<!--{/if}-->
										</dd>
									</dl>
								</td>
							<!--{else}-->
								<tr {if $key != 0}class="fl_row"{/if}>
									<td class="fl_icn">
										<a href="forum.php?mod=group&fid=$group[fid]" title="$group[name]" target="_blank"><img src="$group[icon]" alt="$group[name]" width="32" /></a>
									</td>
									<td>
										<h2><a href="forum.php?mod=group&fid=$group[fid]" target="_blank">$group[name]</a><span class="xg1 xw0"> ($group[membernum] {lang activity_member_unit})</span></h2>
										<p><!--{echo cutstr($group[description], 100)}--></p>
									</td>
									<td class="fl_i">
										<span class="xi2">$group[threads] {lang index_threads}</span>
									</td>
									<td class="fl_by">
										<div>
											<!--{if is_array($group['lastpost'])}-->
											<a href="forum.php?mod=redirect&tid=$group[lastpost][tid]&goto=lastpost#lastpost" class="xi2"><!--{echo cutstr($group[lastpost][subject], 30)}--></a> <cite>$group[lastpost][dateline] <!--{if $group['lastpost']['author']}--><a href="home.php?mod=space&username={$group[lastpost][encode_author]}">{$group[lastpost][author]}</a><!--{else}-->$_G[setting][anonymoustext]<!--{/if}--></cite>
											<!--{else}-->
											{lang never}
											<!--{/if}-->
										</div>
									</td>
								</tr>
							<!--{/if}-->
							<!--{/loop}-->
						</table>
					</div>
				</div>
				<!--{/if}-->

				<!--{if $threadmodcount}--><div class="bm"><div class="ntc_l hm xi2"><strong>{lang forum_moderate_unhandled}</strong></div></div><!--{/if}-->

				<div id="pgt" class="bm bw0 pgs cl">
					<span id="fd_page_top">$multipage</span>
					<span class="pgb y" {if $_G[setting][visitedforums]}id="visitedforums" onmouseover="$('visitedforums').id = 'visitedforumstmp';this.id = 'visitedforums';showMenu({'ctrlid':this.id,'pos':'34'})"{/if} ><a href="forum.php">{lang return_index}</a></span>
					<!--{if !$_GET['archiveid']}--><a href="javascript:;" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu({'ctrlid':this.id})"{if !$_G['forum']['allowspecialonly'] && empty($_G['forum']['picstyle']) && !$_G['forum']['threadsorts']['required']} onclick="showWindow('newthread', 'forum.php?mod=post&action=newthread&fid=$_G[fid]')"{else} onclick="location.href='forum.php?mod=post&action=newthread&fid=$_G[fid]';return false;"{/if} title="{lang send_posts}"><img src="{IMGDIR}/pn_post.png" alt="{lang send_posts}" /></a><!--{/if}-->
					<!--{hook/forumdisplay_postbutton_top}-->
				</div>
				<!--{if ($_G['forum']['threadtypes'] && $_G['forum']['threadtypes']['listable']) || count($_G['forum']['threadsorts']['types']) > 0}-->
					<ul id="thread_types" class="ttp bm cl">
						<!--{hook/forumdisplay_threadtype_inner}-->
						<li id="ttp_all" {if !$_GET['typeid'] && !$_GET['sortid']}class="xw1 a"{/if}><a href="forum.php?mod=forumdisplay&fid=$_G[fid]{if $_G['forum']['threadsorts']['defaultshow']}&filter=sortall&sortall=1{/if}{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang forum_viewall}</a></li>
						<!--{if $_G['forum']['threadtypes']}-->
							<!--{loop $_G['forum']['threadtypes']['types'] $id $name}-->
								<!--{if $_GET['typeid'] == $id}-->
								<li class="xw1 a"><a href="forum.php?mod=forumdisplay&fid=$_G[fid]{if $_GET['sortid']}&filter=sortid&sortid=$_GET['sortid']{/if}{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}"><!--{if $_G[forum][threadtypes][icons][$id] && $_G['forum']['threadtypes']['prefix'] == 2}--><img class="vm" src="$_G[forum][threadtypes][icons][$id]" alt="" /> <!--{/if}-->$name</a></li>
								<!--{else}-->
								<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=typeid&typeid=$id$forumdisplayadd[typeid]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}"><!--{if $_G[forum][threadtypes][icons][$id] && $_G['forum']['threadtypes']['prefix'] == 2}--><img class="vm" src="$_G[forum][threadtypes][icons][$id]" alt="" /> <!--{/if}-->$name</a></li>
								<!--{/if}-->
							<!--{/loop}-->
						<!--{/if}-->

						<!--{if $_G['forum']['threadsorts']}-->
							<!--{if $_G['forum']['threadtypes']}--><li><span class="pipe">|</span></li><!--{/if}-->
							<!--{loop $_G['forum']['threadsorts']['types'] $id $name}-->
								<!--{if $_GET['sortid'] == $id}-->
								<li class="xw1 a"><a href="forum.php?mod=forumdisplay&fid=$_G[fid]{if $_GET['typeid']}&filter=typeid&typeid=$_GET['typeid']{/if}{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">$name</a></li>
								<!--{else}-->
								<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=sortid&sortid=$id$forumdisplayadd[sortid]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">$name</a></li>
								<!--{/if}-->
							<!--{/loop}-->
						<!--{/if}-->
						<!--{hook/forumdisplay_filter_extra}-->
					</ul>
					<script type="text/javascript">showTypes('thread_types');</script>
				<!--{/if}-->
				<!--{hook/forumdisplay_threadtype_extra}-->
				<!--{if empty($_G['forum']['sortmode'])}-->
					<!--{subtemplate forum/forumdisplay_list}-->
				<!--{else}-->
					<!--{subtemplate forum/forumdisplay_sort}-->
				<!--{/if}-->
			<!--{/if}-->
			<!--[diy=diyfastposttop]--><div id="diyfastposttop" class="area"></div><!--[/diy]-->
			<!--{if $fastpost}-->
				<!--{template forum/forumdisplay_fastpost}-->
			<!--{/if}-->

			<!--{hook/forumdisplay_bottom}-->
			<!--[diy=diyforumdisplaybottom]--><div id="diyforumdisplaybottom" class="area"></div><!--[/diy]-->
		</div>

		<!--{if $_G['forum']['allowside']}-->
		<div class="sd">
			<!--{hook/forumdisplay_side_top}-->
			<!--{if !$subforumonly}-->
				<div class="bm">
					<div class="bm_h">
						<h2>{lang their}: <!--{eval echo cutstr($_G['cache']['forums'][$_G['forum']['fup']]['name'], 22, '')}--></h2>
					</div>
					<div class="bm_c">
						<ul class="xl xl2 cl">
						<!--{loop $_G['cache']['forums'] $bforum}-->
							<!--{if $bforum['fup'] == $_G['forum']['fup'] && $bforum['status']}-->
								<li><a href="forum.php?mod=forumdisplay&fid=$bforum[fid]">$bforum['name']</a></li>
							<!--{/if}-->
						<!--{/loop}-->
						</ul>
					</div>
				</div>

				<!--{if $recommendgroups}-->
				<div class="bm">
					<div class="bm_h cl">
						<h2>{lang recommended_groups}</h2>
					</div>
					<div class="bm_c cl">
						<ul class="ml mls cl">
						<!--{loop $recommendgroups $key $group}-->
							<li>
							<a href="forum.php?mod=group&fid=$group[fid]" title="$group[name]" target="_blank" class="avt"><img src="$group[icon]" alt="$group[name]"></a>
							<p><a href="forum.php?mod=group&fid=$group[fid]" target="_blank">$group[name]</a></p>
							</li>
						<!--{/loop}-->
						</ul>
					</div>
				</div>
				<!--{/if}-->

				<!--{if !($_G['forum']['simple'] & 1) && $_G[setting][whosonlinestatus]}-->
					<div class="bm">
						<!--{if $detailstatus}-->
						<div class="bm_h cl">
							<span class="o y"><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&page=$page&showoldetails=no#online"><img src="{IMGDIR}/collapsed_no.gif" alt="" /></a></span>
							<h2>{lang forum_activeusers} ($onlinenum)</h2>
						</div>
						<div class="bm_c">
							<ul class="ml mls cl">
							<!--{loop $whosonline $key $online}-->
								<li>
								<a href="home.php?mod=space&uid=$online[uid]" class="avt"><!--{avatar($online[uid],small)}--></a>
								<!--{if $online['uid']}-->
									<p><a href="home.php?mod=space&uid=$online[uid]">$online[username]</a></p>
								<!--{else}-->
									<p>$online[username]</p>
								<!--{/if}-->
								<span>$online[lastactivity]{LF}</span>
								</li>
							<!--{/loop}-->
							</ul>
						</div>
						<!--{else}-->
						<div class="bm_h cl">
							<span class="o y"><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&page=$page&showoldetails=yes#online" class="nobdr"><img src="{IMGDIR}/collapsed_yes.gif" alt="" /></a></span>
							<h2>{lang forum_activeusers} ($onlinenum)</h2>
						</div>
						<!--{/if}-->
					</div>
				<!--{/if}-->
			<!--{/if}-->
			<div class="drag">
				<!--[diy=diy2]--><div id="diy2" class="area"></div><!--[/diy]-->
			</div>
			<!--{hook/forumdisplay_side_bottom}-->
		</div>
		<!--{/if}-->
	</div>
</div>
<!--{if $_G['group']['allowpost'] && ($_G['group']['allowposttrade'] || $_G['group']['allowpostpoll'] || $_G['group']['allowpostreward'] || $_G['group']['allowpostactivity'] || $_G['group']['allowpostdebate'] || $_G['setting']['threadplugins'] || $_G['forum']['threadsorts'])}-->
	<ul class="p_pop" id="newspecial_menu" style="display: none">
		<!--{if !$_G['forum']['allowspecialonly']}--><li><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]">{lang post_newthread}</a></li><!--{/if}-->
		<!--{if $_G['forum']['threadsorts'] && !$_G['forum']['allowspecialonly']}-->
			<!--{loop $_G['forum']['threadsorts']['types'] $id $threadsorts}-->
				<!--{if $_G['forum']['threadsorts']['show'][$id]}-->
					<li class="popupmenu_option"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&extra=$extra&sortid=$id">$threadsorts</a></li>
				<!--{/if}-->
			<!--{/loop}-->
		<!--{/if}-->
		<!--{if $_G['group']['allowpostpoll']}--><li class="poll"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&special=1">{lang post_newthreadpoll}</a></li><!--{/if}-->
		<!--{if $_G['group']['allowpostreward']}--><li class="reward"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&special=3">{lang post_newthreadreward}</a></li><!--{/if}-->
		<!--{if $_G['group']['allowpostdebate']}--><li class="debate"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&special=5">{lang post_newthreaddebate}</a></li><!--{/if}-->
		<!--{if $_G['group']['allowpostactivity']}--><li class="activity"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&special=4">{lang post_newthreadactivity}</a></li><!--{/if}-->
		<!--{if $_G['group']['allowposttrade']}--><li class="trade"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&special=2">{lang post_newthreadtrade}</a></li><!--{/if}-->
		<!--{if $_G['setting']['threadplugins']}-->
			<!--{loop $_G['forum']['threadplugin'] $tpid}-->
				<!--{if array_key_exists($tpid, $_G['setting']['threadplugins']) && @in_array($tpid, $_G['group']['allowthreadplugin'])}-->
					<li class="popupmenu_option"{if $_G['setting']['threadplugins'][$tpid][icon]} style="background-image:url(source/plugin/$tpid/$_G[setting][threadplugins][$tpid][icon])"{/if}><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&specialextra=$tpid">{$_G[setting][threadplugins][$tpid][name]}</a></li>
				<!--{/if}-->
			<!--{/loop}-->
		<!--{/if}-->
	</ul>
<!--{/if}-->

<!--{if $_G['setting']['visitedforums'] && $_G['forum']['status'] != 3}-->
	<div id="visitedforums_menu" class="p_pop blk cl" style="display: none;">
		<table cellspacing="0" cellpadding="0">
			<tr>
				<td id="v_forums">
					<h3 class="mbn pbn bbda xg1">{lang viewed_forums}</h3>
					<ul class="xl xl1">
						$_G['setting']['visitedforums']
					</ul>
				</td>
			</tr>
		</table>
	</div>
<!--{/if}-->
<!--{if $_G['setting']['threadmaxpages'] > 1 && $page && !$subforumonly}-->
	<script type="text/javascript">document.onkeyup = function(e){keyPageScroll(e, <!--{if $page > 1}-->1<!--{else}-->0<!--{/if}-->, <!--{if $page < $_G['setting']['threadmaxpages'] && $page < $_G['page_next']}-->1<!--{else}-->0<!--{/if}-->, 'forum.php?mod=forumdisplay&fid={$_G[fid]}&filter={$filter}&orderby={$_GET[orderby]}{$forumdisplayadd[page]}&{$multipage_archive}', $page);}</script>
<!--{/if}-->

<!--{if empty($_G['forum']['picstyle']) && $_GET['orderby'] == 'lastpost' && empty($_GET['filter']) }-->
	<script type="text/javascript">checkForumnew_handle = setTimeout(function () {checkForumnew($_G[fid], lasttime);}, checkForumtimeout);</script>
<!--{/if}-->

<div class="wp mtn">
	<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div>
<!--{subtemplate common/footer}-->