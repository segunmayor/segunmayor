// run form dialog box action

function runDialog () {
    // update url to root after dialogue close

const dialog = document.querySelector('dialog')

console.log('dialog dialog: ', dialog)

if(dialog !== null)
{
   
    const dialogButton = document.querySelector('dialog button')

    console.log('outside dialog button', dialogButton)

    if(dialogButton !== null){
        dialogButton.addEventListener('click', () => {
        console.log('button dialog')
        location.href = "/"
    })
    }
}
}
