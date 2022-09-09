<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-4">
            <h3>Statistiques en lignes :</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" />
                        <?php for ($i = 0; $i < max($lesDistributions); $i++) { ?>
                            <th scope="col"><?php echo $i + 1 ?></th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>

                    <!-- <tr> -->
                    <?php foreach ($lesDistributions as $k => $v) : ?>
                        <tr>
                            <th><?php echo $k; ?></th>
                            <?php for ($i = 0; $i < $v; $i++) { ?>
                                <td>*</td>
                            <?php } ?>
                        </tr>
                    <?php endforeach; ?>
                    <!-- </tr> -->
                </tbody>
            </table>
        </div>
    </div>
</div>