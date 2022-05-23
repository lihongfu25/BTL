import { handleControlData, handleUserCaretIcon, handleChangePage } from "./manager.js";

let tourName = document.getElementById('tour-name')
let destination = document.getElementById('destination')
let days = document.getElementById('days')
let startDay = document.getElementById('start-day')
let desc = document.getElementById('desc')

handleControlData(tourName, destination, days, startDay, desc)

handleUserCaretIcon()

handleChangePage()