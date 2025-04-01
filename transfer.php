<?php
    require __DIR__ . '/layout.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $amount = $_POST['amount'];
        $_SESSION['Balance'] = $_SESSION['Balance'] - $amount;
        echo 'transfer post';
    } else {
        ?>
        <div style="padding-left: 30px;">
            <div>Form transfer from BAKNING</div>
            <div>
                <form id="transfer-form" name="transfer-form" action="#" method="POST">
                    <div>
                        Transfer to account:
                    </div>

                    <div>
                        <input type="text" name="amount" value="10000">
                        <input type="submit">
                    </div>
                </form>
            </div>
        </div>
        <?php
    }
?>