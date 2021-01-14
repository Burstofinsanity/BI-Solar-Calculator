<?php
$appliances = $appliances??[];
$dir = $dir??plugin_dir_path( __FILE__ );
include $dir.'/includes/appliances.php';
$bckid = uniqid('bck');
$slrid = uniqid('slr');
    $content = "
        <div id='bi-solar-calculator' >
            <div class='applicationList'>
                <div class='itemsList'>
                    <div class='item'>
                        <div class='summary'></div>
                        <div class='editor'>
                        <div class='appliance'>
                        <select class='selectApp'>
                            ";

    foreach ($appliances AS $appliance){
        $content .= "<option data-title='${appliance['title']}' data-qty='${appliance['qty']}' data-watt='${appliance['watt']}' data-solar='${appliance['solar']}' data-backup='${appliance['backup']}' data-hours='${appliance['hours']}'>${appliance['title']}</option>";
    }


    $content .="
        </select>
        </div>
        <input placeholder='Qty' type='number' name='qty[]' class='input qty'/>
        <input placeholder='Hrs' type='number' name='hours[]' class='input hours' step='0.01'/>
        <input  placeholder='Watts' type='number' name='watt[]' class='input watt'/>
        <div class='solar'><input id='${slrid}' placeholder='Solar' type='checkbox' name='solar[]' class='input solar'/>
        <label for='${slrid}'>Solar</label>
        </div>
        <div class='backup'>
            <input id='${bckid}' placeholder='Backup' type='checkbox' name='backup[]' class='input backup'/>
                <label for='${bckid}'>Backup</label>
        </div>
        <div class='remove'>
            <a href='javascript:void(0)' onclick='this.closest(\".item\").remove();calculate()'>X</a>
        </div>
</div>
                    <div class='action'></div>                       
                    </div>
                </div>
                <button id='clear' onclick='clearFields()' class='openButton'>Clear</button>
                <button id='addAppliance' class='button'>Add Appliance</button>
                <div>
                    <h3>Backup Hours</h3>
                        <input  placeholder='Hours' type='number' id='bours' name='bours' class='input backuphours' min='1' value='1'/>
                </div>
            </div>
            <div class='calculations'>
                <h3>Usage</h3>
                <div class='usage'>
                    <div class='row1-3'>
                        <label>24 Hours</label>
                        <h3 id='u24'>0</h3>
                    </div>
                    <div class='row1-3'>
                        <label>Monthly</label>
                        <h3 id='u30'>0</h3>
                    </div>
                    <div class='row1-3'>
                        <label>Yearly</label>
                        <h3 id='u365'>0</h3>  
                    </div>
                </div>
                <h3>Required System</h3>
                <div class='system'>
                    <div class='row1-3'>
                        <label>Inverter</label>
                        <h3 id='inv'>0</h3>
                    </div>
                    <div class='row1-3'>
                        <label>Battery</label>
                        <h3 id='bat'>0</h3>
                    </div>
                    <div class='row1-3'>
                        <label>Panels</label>
                        <h3 id='pan'>0</h3>  
                    </div>
                </div>
            </div>
        </div>
        <link href='https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css' rel='stylesheet' />
        <script src='https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js'></script>
    ";
