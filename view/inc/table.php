<div class="container my-3 border border-success pt-3">
    <div class="text-center">
    <div class="container">
                <div class="row">
                    <div class="col-12">
                        <table class="table table-bordered table-striped" data-toggle="table" data-show-columns="true" data-search="false" data-pagination="true" data-checkbox-header="true">
                        <thead>
                                <tr>
                                    <th data-checkbox="true" data-click-to-select="true">Id</th>
                                    <th class="text-center">Titre</th>
                                    <th class="text-center">Description</th>
                                    <th class="text-center">Latitude</th>
                                    <th class="text-center">Longitude</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($getMaps as $map) {
                                        
                                        ?>
                                    <tr>
                                        <td><?=$map["map_id"]?></td>
                                        <td><?=$map["nom"]?></td>
                                        <td><?=$map["desc"]?></td>
                                        <td><?=$map["lat"]?></td>
                                        <td><?=$map["lon"]?></td>
  
                                    </tr>
                                    <?php
                                    }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
</div>
    </div>
</div>