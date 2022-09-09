<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-4">
            <h3>Statistiques des notes entre :</h3>
            <table class="table">
                <thead>
                    <tr>
                        <?php foreach ($lesDistributions as $key => $value) { ?>
                            <th scope="col"><?php echo $key ?></th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lesDistributions as $k => $v) : ?>
                        <td><?php echo $v; ?></td>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>