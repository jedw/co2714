import React from "react"
import ReactDOM from "react-dom"


function Header(){
    
    const firstname = "Jonathan"
    const lastname = "Edwards"
    const date = new Date()
    const hours = date.getHours()
    let timeOfDay

    const styles = {
        fontSize:32
    }

    if (hours < 12){
        timeOfDay = "morning"
        styles.color = "#0f0"
    } 
    else if (hours >= 12 && hours < 17){
        timeOfDay = "afternoon"
        styles.color = "#05f"
    }
    else {
        timeOfDay = "night"
        styles.color = "#026"
    }

    return(
        <header>
            <h1 style={styles}>Good {timeOfDay+" "+firstname+" "+lastname}</h1>
        </header>
    )
}

export default Header