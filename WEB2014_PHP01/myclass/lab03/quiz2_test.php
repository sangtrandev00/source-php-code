<table>
    <?php for ($i = 0; $i <= 5; $i++): ?>
    <tr>
        <?php for ($j = 0; $j <= 5; $j++): ?>
        <td>
            <?php echo $i . $j; ?>
        </td>
        <?php endfor;?>
    </tr>
    <?php endfor;?>
</table>

<?php

function myFunc(): void
{return;}
?>