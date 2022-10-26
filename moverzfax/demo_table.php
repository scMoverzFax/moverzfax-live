

<div class="row my-2">
                      <div class="col-12">
                          <div class="card d-grid px-5 py-3 mx-4 shadow-sm" style="border-radius:15px;border:1px solid #67bd3c;">
                            <div class="col-md-12" style="overflow-x: auto;overflow-y: auto;">
                                <table class="table-striped" style="width:auto">
                                    <thead>
                                        <th>Sr. No</th>
                                        <!-- <th>Origin Country</th> -->
                                        <th>Origin State</th>
                                        <th>Origin City</th>
                                        <th>Origin Zip Code</th>
                                        <!-- <th>Origin Address</th> -->
                                        <!-- <th>Destination Country</th> -->
                                        <th>Destination State</th>
                                        <th>Destination City</th>
                                        <th>Destination ZIP Code</th>                                
                                        <!-- <th>Destination Address</th>-->
                                        <th>Date Of Move</th>                                
                                        <th>Types Of Dwelling</th>                                
                                        <th>Size Of Dwelling</th>
                                        <!-- <th>Some Details</th> -->
                                    </thead>
                                    <tbody>
                                        <tr style = "line-height: 1.2">
                                            <td><?= $sr_no; ?></td>
                                            <!-- <td><?= $res['origin_country']; ?></td> -->
                                            <td><?= $res['stname']; ?></td>
                                            <td><?= $res['ciname']; ?></td>
                                            <td><?= $res['origin_zip_code']; ?></td>
                                            <!-- <td><?= $res['origin_address']; ?></td> -->
                                            <!-- <td><?= $res['destination_country']; ?></td> -->
                                            <td><?= $res['stname']; ?></td>
                                            <td><?= $res['ciname']; ?></td>
                                            <td><?= $res['destination_zip_code']; ?></td>
                                            <!-- <td><?= $res['destination_address']; ?></td> -->
                                            <td style="padding:0px"><?= $res['date_of_move']; ?></td>
                                            <td><?= $res['type_of_dwelling']; ?></td>
                                            <td><?= $res['size_of_dwelling']; ?></td>
                                            <!-- <td><?= $res['some_details']; ?></td> -->
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                          </div>  
                      </div>
                  </div>