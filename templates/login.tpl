{*
login.tpl: login form
*}

{extends file="layout.tpl"}

{block name="localstyle"}
  <style type="text/css">
    td:first-child, th:first-child {
      width: 10px;
      white-space: nowrap;
    }
  </style>
{/block}

{block name="content"}
<h2>Login</h2>

<p>Please enter access information</p>
<form action="validate.php" method="post" autocomplete="off">
  <table class="table table-sm table-borderless">
    <tr>
      <th>user:</th>
      <td><input class="form-control" type="text" name="username"
                 value="{$username|escape:'html'}" /></td>
    </tr>
    <tr>
      <th>password:</th>
      <td><input class="form-control" type="password" name="password" /></td>
    </tr>
    <tr>
      <td></td>
      <td>
        <button type="submit" name="access">Access</button>
        <button type="submit" name="cancel">Cancel</button>
      </td>
    </tr>
  </table>
  
  <h4 class="message">{session_get_flash var='message'}</h4>
</form>
{/block}
