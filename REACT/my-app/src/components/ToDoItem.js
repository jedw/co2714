import React from "react"
import ReactDom from "react-dom"
function ToDoItem(props){
    return(
        <div>
            <input classfor="form-check-input" type="checkbox" value={props.value}/>
            <p classFor="form-check-label">{props.textLabel}</p>
        </div>
    )
}

export default ToDoItem