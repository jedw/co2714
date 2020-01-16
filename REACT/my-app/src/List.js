import React from "react"
import ReactDOM from "react-dom"
import ToDoItem from "./components/ToDoItem"
import Header from "./components/Header"
import Footer from "./components/Footer"

function List()
{
    return (
        <div> 
            <Header />
        <div classfor="form-check">
            <ToDoItem textLabel="Buy beer" value="beer"/>
            <ToDoItem textLabel="Drink beer" value="dbeer"/>
            <ToDoItem textLabel="Annoy Lorna" value="lorna"/>
            <ToDoItem textLabel="Learn REACT" value="react"/>
            <ToDoItem textLabel="Waste time" value="time"/>
        </div> 
        <Footer />
        </div>   
        )
}
export default List