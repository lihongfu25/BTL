import { handleRenderData, handleUserCaretIcon } from "./manager.js";

let tourName = document.getElementById('tour-name')
let tourDestination = document.getElementById('tour-destination')
let tourDays = document.getElementById('tour-days')
let tourStartDay = document.getElementById('tour-startDay')
let tourDesc = document.getElementById('tour-desc')

handleRenderData(tourName, tourDestination, tourDays, tourStartDay, tourDesc)

handleUserCaretIcon()