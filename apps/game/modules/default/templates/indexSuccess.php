
<form action="<?php echo url_for('default/index') ?>" method="POST">
    <table>
        <?php echo $form ?>
        <tr>
            <td colspan="2">
                <input type="submit" value="Submit Throw"/>
            </td>
        </tr>
    </table>
</form>

<br />
Games: <?php echo $throw ?>
<br />

<? foreach ($results['games'] as $game) : ?>
<ul>
        <li>Game: <? foreach ($game['data'] as $k => $v) : ?><? echo $v ?> <? endforeach; ?></li>
        <li>Score: <? echo $game['score'] ?></li>
</ul>
<? endforeach; ?>

Total Score: <?php echo $results['t_score'] ?>
