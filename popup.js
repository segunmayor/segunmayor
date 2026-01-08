
const portfolio_cta = document.querySelectorAll("div.portfolio-text a")

const overlay = document.querySelector(".overlay")

const portfolio_popup = document.querySelector(".portfolio-popup")

console.log("portfolio cta: ", portfolio_cta)

const portfolioElement = (e) => e.addEventListener("click", isViewedPortfolioElement)

window.addEventListener("load", loadPortfolioAction)

function loadPortfolioAction() 
{
    portfolio_cta.forEach(portfolioElement)
}

function isViewedPortfolioElement (event)
{

     event.preventDefault();
    
    // const portfolio_img = document.querySelectorAll("")

const popup_img_wrapper = document.querySelector(".portfolio-popup .wrapper-popup")

const img_node = document.createElement("IMG")
img_node.src = event.target.parentNode.href

const body_height = document.querySelector("body").clientHeight

    console.log("portfolio element: ", event.target.parentNode.href, "popup_img_wrapper: ", popup_img_wrapper, "cancel: ", event.cancelable, "body height: ", body_height)

popup_img_wrapper.appendChild(img_node)

// document.querySelector(".portfolio-popup .wrapper-popup img.popup").src = img_url

overlay.style.display = "block"
overlay.style.height = body_height + "px"
portfolio_popup.style.display = "flex"

return
}

overlay.addEventListener("click", isPortfolioDialogueClosed)

function isPortfolioDialogueClosed ()
{
portfolio_popup.style.display = "none"
overlay.style.display = "none"

const popup_img = document.querySelector(".portfolio-popup .wrapper-popup img")

popup_img.remove()
}