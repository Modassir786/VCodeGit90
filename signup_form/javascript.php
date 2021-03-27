<script>
let bto = document.querySelector('#I');
bto.addEventListener('click', (e)=>{
    bto.value='Submiting...';
    bto.style.background='rgb(201,201,19)';
    bto.style.color='green';
    output.style.marginLeft='1px';

});
window.addEventListener('keydown', clicking, false);
function clicking(e){
    if(e.keyCode === '13'){
        formControl.getElementById('I').value='Submiting...';
        output.style.marginLeft='1px';
}
};

let input = document.querySelector('#buttonsign');
let output = document.querySelector('#Signup_input_arrea');
input.addEventListener('click', (e) => {
input.value = parseInt(input.value) + 1;
    if(input.value>=3){
    input.value=1;
    }
    if(input.value==1){
        output.style.marginLeft='1px';
    }
    if(input.value==2){
        output.style.marginLeft='-505px';
    }
});

let uploaded = document.querySelector('#btn_upload');
uploaded.addEventListener('click', (e) => {
    uploaded.value='Uploading';
    uploaded.style.background='rgb(110, 65, 48)';
    output.style.marginLeft='1px';
    uploaded.style.color='#ccc';
})
</script>
