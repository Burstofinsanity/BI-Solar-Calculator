
jQuery(document).ready(function() {
    setSelects()
    document.querySelector('input[name="bours"]').addEventListener('change',calculate);
});

jQuery('#addAppliance').on('click',(e)=>{
    let list = e.target.closest('.applicationList').querySelector('.itemsList');
    let target = list.firstElementChild.querySelector('select');
    jQuery(target).select2('destroy');
    let clone = list.firstElementChild.cloneNode(true);
    clone.querySelectorAll('input').forEach(e=>{e.value = '';e.checked = false;});
    let solar = clone.querySelector('input.solar');
    let lbl1 = clone.querySelector('label[for="'+solar.id+'"]')
    solar.id = solar.id + Date.now();
    lbl1.setAttribute('for',solar.id);
    let backup = clone.querySelector('input.backup');
    let lbl2 = clone.querySelector('label[for="'+backup.id+'"]')
    backup.id = backup.id + Date.now();
    lbl2.setAttribute('for',backup.id);
    list.appendChild(clone);
    setSelects();
})

function setSelects(){

    let item = jQuery('select')
    item.select2();
    item.on('select2:select', function (e) {
        let el = e.params.data.element;
        let par = el.closest('.item')
        let data = el.dataset;
        par.querySelector('input[name="qty[]"]').value = data.qty;
        par.querySelector('input[name="hours[]"]').value = data.hours;
        par.querySelector('input[name="watt[]"]').value = (data.watt * data.hours);
        par.querySelector('input[name="watt[]"]').setAttribute('data-watt',data.watt);
        par.querySelector('input[name="solar[]"]').checked = data.solar;
        par.querySelector('input[name="backup[]"]').checked = data.backup;
        par.querySelector('input[name="qty[]"]').addEventListener('change',calculate);
        par.querySelector('input[name="hours[]"]').addEventListener('change',calculate);
        par.querySelector('input[name="watt[]"]').addEventListener('change',calculate);
        calculate();
    });
}

function calculate(){
    let watt = 0;
    let solar = 0;
    let backup = 0;
    document.querySelectorAll('input[name="watt[]"]').forEach(e=>{
        let par = e.closest('.item');
        let qty = par.querySelector('input[name="qty[]"]').value;
        watt = parseFloat(watt) + (parseFloat(e.value) * qty);
        if(par.querySelector('input[name="solar[]"]').checked)
            solar = parseFloat(solar) + (parseFloat(e.value) * qty);
        if(par.querySelector('input[name="backup[]"]').checked){
            backup = parseFloat(backup) + (parseFloat(e.dataset.watt));
        }
    });
    let bours = document.querySelector('input[name="bours"]').value;
    document.querySelector('#u24').innerHTML = convertWatt(watt);
    document.querySelector('#u30').innerHTML = convertWatt(watt*30);
    document.querySelector('#u365').innerHTML = convertWatt(watt*365);
    let sLow = Math.ceil(solar / 150);
    let sHigh = Math.ceil( solar / 350);
    let inverter = '';
    if(watt < 3000){
        inverter = '3KW'
    }
    else
    if(watt >= 3000 && watt < 5000) {
        inverter = '5KW'
    }
    else
    if(watt >= 5000 && watt < 7200) {
        inverter = '7.2KW'
    }
    else
    if(watt >= 7200) {
        inverter = '7.2KW+ '
    }

    document.querySelector('#inv').innerHTML = inverter;
    document.querySelector('#pan').innerHTML = sHigh + ' - '+ sLow;
    document.querySelector('#bat').innerHTML = ((backup * bours) /1000) + 'kWh';
}

function convertWatt(value){
    if(value < 1000)
    { return value+'watt'}
    else
    if(value > 1000 && value < 1000000){
        let val = value / 1000;
        return val+'kW';
    }
    else
    if(value > 1000000 ){
        let val = value / 1000000;
        return val+'mW';
    }

}

function clearFields(){
    document.querySelectorAll('.itemsList .item:not(:first-child)').forEach(e=>e.remove());
    document.querySelectorAll('.itemsList .item input').forEach(e=>e.value ='');
}