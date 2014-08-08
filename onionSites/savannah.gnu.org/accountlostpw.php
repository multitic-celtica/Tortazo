<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US.UTF-8" xml:lang="en-US.UTF-8">
<head>
  <title>Lost Account Password [Savannah]</title>
  <meta name="Generator" content="Savane 3.1-cleanup, see http://savannah.gnu.org/projects/administration" />
  <meta http-equiv="Content-Script-Type" content="text/javascript" />
  <link rel="stylesheet" type="text/css" href="/css/Savannah.css" />
  <link rel="icon" type="image/png" href="/images/Savannah.theme/icon.png" />
<meta name="Author" content="Copyright (C) 2000, 2001, 2002, 2003 Free Software Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111, USA Verbatim copying and distribution of this entire article is permitted in any medium, provided this notice is preserved" />
<meta name="Keywords" content="Savannah,GNU, FSF, Free Software Foundation, GNU/Linux, Linux, Emacs, GCC, Unix, Free Software, Operating System, GNU Kernel, HURD, gnus, SourceForge" />
<meta name="Description" content="Savannah is a central point for development, distribution and maintainance of Free Software. It allows contributors to easily join existing Free Software projects." />

</head>
<body>
<div class="realbody">

 <ul class="menu">
        <li class="menulogo">
          <a href="/"><img src="/images/Savannah.theme/floating.png" alt="Back to Savannah Homepage" border="0" width="148" height="125" /></a>
        </li><!-- end menulogo -->
        <li class="menutitle">
           Login Status:
        </li><!-- end menutitle -->
        <li class="menuitem"> <span class="error">Not Logged In</span></li>
	<li class="menuitem">
           <a href="/account/login.php?uri=%2Faccount%2Flostpw.php" class="menulink" title="Login page - you must have registered an account first">Login</a>
        </li><!-- end menuitem -->
	<li class="menuitem">
           <a href="/account/register.php" class="menulink" title="Account registration form">New User</a>
        </li><!-- end menuitem -->
        <li class="menutitle">
           This Page
        </li><!-- end menutitle -->
	<li class="menuitem">
           <a href="/account/lostpw.php?reload=1&amp;" class="menulink" title="Reload the page without risk of reposting data">Clean Reload</a>
        </li><!-- end menuitem -->
	<li class="menuitem">
           <a href="/account/lostpw.php?printer=1&amp;" class="menulink" title="Show this page with a style adapted to printers">Printer Version</a>
        </li><!-- end menuitem -->
        <li class="menutitle">
           Search
        </li><!-- end menutitle -->       <li class="menusearch">      <form action="/search/#options" method="get" ><input type="text" size="15" name="words" value="" /><br /> <em>in</em> <select name="type_of_search"><option value="soft" selected="selected">Projects</option>
<option value="people">People</option>
<option value="cookbook">Cookbook</option>
<option value="support">Support</option>
<option value="bugs">Bugs</option>
<option value="task">Tasks</option>
<option value="patch">Patches</option>
</select><br />&nbsp;&nbsp;&nbsp;<input type="submit" name="Search" value="Search" /><input type="hidden" name="exact" value="1" />      </form>       </li><!-- end menusearch -->
        <li class="menutitle">
           Hosted Projects
        </li><!-- end menutitle -->
	<li class="menuitem">
           <a href="/register/" class="menulink" title="Register your project at Savannah">Register New Project</a>
        </li><!-- end menuitem -->
	<li class="menuitem">
           <a href="/search/index.php?type_of_search=soft&amp;words=%%%" class="menulink" title="Browse the full list of hosted projects">Full List</a>
        </li><!-- end menuitem -->
	<li class="menuitem">
           <a href="/people/" class="menulink" title="Browse the list of request for contributions">Contributors Wanted</a>
        </li><!-- end menuitem -->
	<li class="menuitem">
           <a href="/stats/" class="menulink" title="Browse statistics about Savannah">Statistics</a>
        </li><!-- end menuitem -->
        <li class="menutitle">
           Site Help
        </li><!-- end menutitle -->
	<li class="menuitem">
           <a href="/cookbook/?group=administration" class="menulink" title="Recipes dedicated to any users, including Project Admins">User Docs: Cookbook</a>
        </li><!-- end menuitem -->
	<li class="menuitem">
           <a href="/userguide/" class="menulink" title="In-depth Documentation dedicated to any users, including Project Admins">User Docs: In Depth Guide</a>
        </li><!-- end menuitem -->
	<li class="menuitem">
           <a href="/support/?group=administration" class="menulink" title="Get help from the Admins of Savannah, when documentation is not enough">Get Support</a>
        </li><!-- end menuitem -->
	<li class="menuitem">
           <a href="/contact.php" class="menulink" title="Contact address of Savannah Admins">Contact Savannah</a>
        </li><!-- end menuitem --><!-- $Id: menu.txt,v 1.37 2013/02/01 22:32:38 karl Exp $  BEGIN -->

	<li class="menuitem">
           <a href="http://savannah.gnu.org/maintenance/FaQ" class="menulink">User Docs: FAQ</a>
        </li><!-- end menuitem -->
        <li class="menutitle">
           GNU Project
        </li><!-- end menutitle -->
	<li class="menuitem">
           <a href="http://www.gnu.org/help/help.html" class="menulink">Help GNU</a>
        </li><!-- end menuitem -->
	<li class="menuitem">
           <a href="http://www.gnu.org/software/software.html" class="menulink">All GNU Packages</a>
        </li><!-- end menuitem -->
	<li class="menuitem">
           <a href="http://www.gnu.org/software/devel.html" class="menulink">Dev Resources</a>
        </li><!-- end menuitem -->
	<li class="menuitem">
           <a href="http://www.gnu.org/licenses/license-list.html" class="menulink">License List</a>
        </li><!-- end menuitem -->
	<li class="menuitem">
           <a href="http://www.gnu.org/prep/ftp.html" class="menulink">GNU Mirrors</a>
        </li><!-- end menuitem -->
<li>
 <center>
  <br>

  <a href="http://www.fsf.org/associate/support_freedom/join_fsf?referrer=2442"><img src="https://static.fsf.org/fsforg/img/thin-image.png" alt="Support freedom" title="Help protect your freedom, join the Free Software Foundation" /></a>
 </center>
</li>


        <li class="menutitle">
           Free Software Foundation
        </li><!-- end menutitle -->
	<li class="menuitem">
           <a href="http://www.fsf.org/events/" class="menulink">Coming Events</a>
        </li><!-- end menuitem -->
	<li class="menuitem">
           <a href="http://www.fsf.org/directory/" class="menulink">Free Software Directory</a>
        </li><!-- end menuitem -->
	<li class="menuitem">
           <a href="http://savannah.gnu.org/maintenance/SavannahCryptographicRestrictions" class="menulink">Cryptographic software legal notice</a>
        </li><!-- end menuitem -->
	<li class="menuitem">
           <a href="http://www.fsf.org/about/dmca-notice" class="menulink">Copyright infringement notification</a>
        </li><!-- end menuitem -->
        <li class="menutitle">
           Related Forges
        </li><!-- end menutitle -->
	<li class="menuitem">
           <a href="http://savannah.nongnu.org/" class="menulink">Savannah Non-GNU</a>
        </li><!-- end menuitem -->
	<li class="menuitem">
           <a href="http://gna.org/" class="menulink">Gna!</a>
        </li><!-- end menuitem -->
	<li class="menuitem">
           <a href="http://puszcza.gnu.org.ua/" class="menulink">Puszcza</a>
        </li><!-- end menuitem --><!-- $Id: menu.txt,v 1.37 2013/02/01 22:32:38 karl Exp $  END -->

 </ul><!-- end menu -->
<div class="main"><a name="top"></a>

<h2 class="toptitle"><img src="/images/Savannah.theme/contexts/main.orig.png" width="48" height="48" alt="main" class="pageicon" />Lost Account Password</h2>
    <div class="topmenu" id="topmenu">
      <span class="topmenutitle" title="Site Wide Scope">
        Site Wide
      </span><!-- end topmenutitle -->
      <div class="topmenuitem"><ul id="topmenuitem">

      </ul></div><!-- end topmenuitem -->
    </div>
<!-- end pagemenu -->
<div id="topmenunooverlap">&nbsp;</div><div id="topmenunooverlapbis">&nbsp;</div><p><strong>Lost your password?</strong></p><p>The form below will email a URL to the email address we have on file for you. In this URL is a 128-bit confirmation hash for your account. Visiting the URL will allow you to change your password online and login.</p><p class="warn">This will work only if your account was already successfully registered and activated. Note that accounts that are not activated within the three days next to their registration are automatically deleted.</p><form action="lostpw-confirm.php" method="post"><p><span class="preinput"> &nbsp;&nbsp;Login Name: &nbsp;&nbsp;</span><input type="text" name="form_loginname" /> &nbsp;&nbsp;<input type="submit" name="send" value="Send lost password hash" /></p></form>
  <p class="backtotop">
  <a href="#top"><img src="/images/Savannah.theme/arrows/top.orig.png" border="0" alt="Back to the top" /></a>
  </p>
</div><!-- end main -->
<br class="clear" />
</div><!-- end realbody -->
<p class="footer"><span style="float:right">
<a href="http://git.savannah.gnu.org/cgit/administration/savane.git/plain/frontend/php/account/lostpw.php">Source<br />Code</a>
</span>

Copyright &copy; 2014 &nbsp;Free Software Foundation, Inc.

<br />

Verbatim copying and distribution of this entire article is
permitted in any medium, provided this notice is preserved.

<br />

The <a href="http://www.gnu.org/graphics/meditate.html">Levitating,
Meditating, Flute-playing Gnu</a> logo is a GNU GPL'ed image provided
by the Nevrax Design Team.
 </p>
 <div align="right"><a href="http://savannah.gnu.org/projects/administration">Powered by Savane 3.1-cleanup</a></div>
</body>
</html>