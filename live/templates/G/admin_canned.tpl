{if $action == 'add'}
<div align="center">
<form action="{$_SERVER.PHP_SELF}" method="post">
<table cellpadding="0" cellspacing="0" class="list">
  <tr class="alt">
    <td>{$lang.type}</td>
    <td>
      <select name="operator">
        <option value="0">{$lang.public}</option>
        <option value="{$id}">{$lang.private}</option>
      </select>
    </td>
  </tr>
  <tr>
    <td>{$lang.department}</td>
    <td>
      <select name="department">
        <option value="0">- {$lang.all} -</option>
        {section name=i loop=$departments}
        <option value="{$departments[i].id}">{$departments[i].name}</option>
        {/section}
      </select>
    </td>
  </tr>
  <tr class="alt">
    <td>{$lang.subject}</td>
    <td><input type="text" name="subject" size="20" maxlength="255" /></td>
  </tr>
  <tr>
    <td>{$lang.message}</td>
    <td><textarea name="message" cols="20" rows="5"></textarea></td>
  </tr>
</table>
<br />
<input type="submit" name="add" value="{$lang.add}" />
</form>
</div>
{elseif $action == 'added'}
<div align="center">
{$lang.canned_added}
</div>
{elseif $action == 'edit'}
<div align="center">
<form action="{$_SERVER.PHP_SELF}" method="post">
<table cellpadding="0" cellspacing="0" class="list">
  <tr class="alt">
    <td>{$lang.type}</td>
    <td>
      <select name="operator">
        <option value="0"{if $canned_message.operatorid == '0'} selected="selected"{/if}>{$lang.public}</option>
        <option value="{$id}"{if $canned_message.operatorid == $id} selected="selected"{/if}>{$lang.private}</option>
      </select>
    </td>
  </tr>
  <tr>
    <td>{$lang.department}</td>
    <td>
      <select name="department">
        <option value="0">- {$lang.all} -</option>
        {section name=i loop=$departments}
        <option value="{$departments[i].id}"{if $departments[i].id == $canned_message.departmentid} selected="selected"{/if}>{$departments[i].name}</option>
        {/section}
      </select>
    </td>
  </tr>
  <tr class="alt">
    <td>{$lang.subject}</td>
    <td><input type="text" name="subject" value="{$canned_message.subject}" size="20" maxlength="255" /></td>
  </tr>
  <tr>
    <td>{$lang.message}</td>
    <td><textarea name="message" cols="20" rows="5">{$canned_message.message}</textarea></td>
  </tr>
</table>
<br />
<input type="hidden" name="id" value="{$canned_message.id}" /><input type="submit" name="edit" value="{$lang.edit}" />
</form>
</div>
{elseif $action == 'edited'}
<div align="center">
{$lang.canned_edited}
</div>
{else}
<form action="{$_SERVER.PHP_SELF}" method="post" onsubmit="return Misc.confirm_action();">
<div align="center">
<table width="90%" border="0" cellspacing="0" cellpadding="2" align="center" class="list">
  <tr class="main">
    <td>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td colspan="2" align="center"><b>{$lang.canned_all}</b></td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td>
    {section name=i loop=$canned.all}
      <table width="100%" class="list" cellspacing="0" cellpadding="2">
        <tr class="alt" align="center"><td>{$canned.all[i].subject}</td><td align="right"><a href="{$conf.url}/admin/canned.php?edit&id={$canned.all[i].id}">{$lang.edit}</a> | <input type="checkbox" name="{$canned.all[i].id}" value="{$canned.all[i].id}" /></td></tr>
        <tr class=""><td colspan="2">{$canned.all[i].message}</td></tr>
      </table>
      <br />
    {/section}
    </td>
  </tr>
</table><br /><br />

<table width="90%" border="0" cellspacing="0" cellpadding="2" align="center" class="list">
  <tr class="main">
    <td>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="center"><b>{$lang.canned_op}</b></td><td align="center">&nbsp;
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td>
    {section name=i loop=$canned.op}
      <table width="100%" class="list" cellspacing="0" cellpadding="2">
        <tr class="alt" align="center"><td>{$canned.op[i].subject}</td><td align="right"><a href="{$conf.url}/admin/canned.php?edit&id={$canned.op[i].id}">{$lang.edit}</a> | <input type="checkbox" name="{$canned.op[i].id}" value="{$canned.op[i].id}" /></td></tr>
        <tr class=""><td colspan="2">{$canned.op[i].message}</td></tr>
      </table>
      <br />
    {/section}
    </td>
  </tr>
</table><br /><br />

<table width="90%" border="0" cellspacing="0" cellpadding="2" align="center" class="list">
  <tr class="main">
    <td>
      <table width="100%" border="0" cellspacing="0" cellpadding="2">
        <tr>
          <td align="center"><b>{$lang.canned_dep}</b></td><td align="center">&nbsp;
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td></td>
  </tr>
{section name=x loop=$canned.dep}
  <tr class="alt">
    <td>
      <b>{$canned.dep[x].name}</b><br />
    </td>
  </tr>
  <tr>
    <td>
    {section name=i loop=$canned.dep[x].messages}
      <table width="100%" class="list" cellspacing="0" cellpadding="2">
        <tr class="alt" align="center"><td>{$canned.dep[x].messages[i].subject}</td><td align="right"><a href="{$conf.url}/admin/canned.php?edit&id={$canned.dep[x].messages[i].id}">{$lang.edit}</a> | <input type="checkbox" name="{$canned.dep[x].messages[i].id}" value="{$canned.dep[x].messages[i].id}" /></td></tr>
        <tr class=""><td colspan="2">{$canned.dep[x].messages[i].message}</td></tr>
      </table>
      <br />
    {/section}
    </td>
  </tr>
{/section}
</table><br /><br />

<table width="90%" border="0" cellspacing="0" cellpadding="0" align="center" class="list">
  <tr class="main">
    <td>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="center"><b>{$lang.canned_both}</b></td><td align="center">&nbsp;
          </td>
        </tr>
      </table>
    </td>
  </tr>
{section name=x loop=$canned.both}
  <tr class="alt">
    <td>
      <b>{$canned.both[x].name}</b><br />
    </td>
  </tr>
  <tr>
    <td>
    {section name=i loop=$canned.both[x].messages}
      <table width="100%" class="list" cellspacing="0" cellpadding="2">
        <tr class="alt" align="center"><td>{$canned.both[x].messages[i].subject}</td><td align="right"><a href="{$conf.url}/admin/canned.php?edit&id={$canned.both[x].messages[i].id}">{$lang.edit}</a> | <input type="checkbox" name="{$canned.both[x].messages[i].id}" value="{$canned.both[x].messages[i].id}" /></td></tr>
        <tr class=""><td colspan="2">{$canned.both[x].messages[i].message}</td></tr>
      </table>
      <br />
    {/section}
    </td>
  </tr>
{/section}
</table>
<br /><br />
<input type="submit" name="delete" value="{$lang.delete}" />
</div>
</form>
{/if}