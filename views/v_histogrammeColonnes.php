<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-4">
            <h3>Statistiques en colonnes :</h3>
            <?php var_dump($lesDistributions); ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" />
                        <?php foreach ($lesDistributions as $k => $v) { ?>
                            <th scope="col"><?php echo $k ?></th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < max($lesDistributions); $i++) { ?>
                        <tr>
                            <th> <?php echo max($lesDistributions) - $i ?></th>

                            <?php foreach ($lesDistributions as $k => $v) { ?>
                                <?php if ((max($lesDistributions) - $i) <= $lesDistributions[$k]) { ?>
                                    <td><?php echo "*"; ?></td>
                                <?php } else { ?>
                                    <td></td>
                                <?php } ?>
                            <?php } ?>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>