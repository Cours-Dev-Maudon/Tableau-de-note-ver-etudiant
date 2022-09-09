<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-4">
            <h3>Élève avec la note minimale</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Élève n°</th>
                        <th scope="col">Note</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lesNotes as $k => $v) : ?>
                        <?php if (min($lesNotes) === $v) { ?>
                            <tr>
                                <th scope="row"><?php echo $k + 1; ?></th>
                                <td><?php echo $v; ?></td>
                            </tr>
                        <?php } ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>