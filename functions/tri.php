<!-- fonction tri d'index -->
<?php
if ( ! empty($_GET['page']))
{
    $order = '';

    if ( ! empty($_POST['date']))
    {
        $date = html($_POST['date']);

        if ($date == 'DESC')
        {
            $order .= " ORDER BY DESC";
        }
        else if ($date == 'ASC')
        {
            $order .= " ORDER BY ASC";
        }
    }
     
  }

      
?>
?>