window.addOptionFunc = addOptionFunc;

let counter=3;
function addOptionFunc(){
    ++counter;
    document.getElementById('addOption').innerHTML +=
    `<div class='form-group d-flex flex-column mb-4'>
        <label for='option${counter}'>Option ${counter} .</label>
        <textarea class='rounded p-2 t-area' name='opt${counter}' id='option${counter}' cols='30' rows='1'></textarea>
    </div>`;
}