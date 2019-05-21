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
<h2>My Orders</h2>

  <table class="table table-sm table-borderless">
    <tr>
    <th>Order Id</th>
    <th>Date/Time</th>
    </tr>
    {foreach $orders as $order}
          
      <tr>
        <td>
          {$order.id}<a href="orderdetails.php?order_id={$order.id}">
            (details)
          </a>
        </td>
        <td>{$order.created_at}</td>
      </tr>
     
    {/foreach}
  </table>
  
 

{/block}
