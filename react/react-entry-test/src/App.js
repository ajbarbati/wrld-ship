/*
For this piece of the test, you will have a several CSS and ReactJS questions.

ReactJS
  X. Fill in your name and the date in the "By" line. 
  X. Add a Function to be called when the Random Number is clicked to change the Number Header State
  X. The random number needs to be between 0 and 100 and showing no decimals 
  X. Add to the log text area saying "Random Number to " and then the new number generated on a new line.  
  X. Add a Function to be called when the Increment Number is clicked to change the Number Header State
  X. If the number will be above 100 (an increment from 100 to 101) display an error stating that the maximum numver is 100 
  X. Add to the log text area saying "Incremented Number to " and then the new number generated on a new line.  
  X. Add a text area for the log state that is 10 rows in height and 100 in width. 
  X. Make sure when each button is click, they are visible in the log and each is on a different line. Wording for this is in #4 and #7.

CSS
  For the CSS portion, getting the basics is the most important which will be listed below, however if you consider yourself a web designer and want to do more than the list, please do. 

  X. Style the buttons to any extent you want to
  X. Add an image to the background that still allows you to read everything. 
  X. If the number is greater than or equal to 50, then the number header needs to be a red. If the number is below 50, then the number header needs to be a blue. 
*/

import React from "react"
import "./App.css"

class App extends React.Component {
  constructor(props) {
    super(props)
    this.state = {
      numberHeader: 0,
      log: "Started Log at 0",
      color: "#392f5a"
    }
  }
  setColor() {
    if (this.state.numberHeader >= 50) {
      this.setState({ color: "red" })
    } else {
      this.setState({ color: "blue" })
    }
  }
  randomNum() {
    const min = 1
    const max = 100
    const num = Math.floor(min + Math.random() * (max - min))
    this.setState({
      numberHeader: num,
      log: this.state.log + "\n" + "React Number to " + "\n" + num
    })
    this.setColor()
  }
  incrementNum() {
    this.setState({
      numberHeader: this.state.numberHeader + 1,
      log:
        this.state.log +
        "\n" +
        "Incremented Number to " +
        "\n" +
        this.state.numberHeader
    })
    if (this.state.numberHeader >= 100) {
      alert("Error Maximum Number is 100")
      console.log("Error Maximum Number is 100")
    }
    this.setColor()
  }
  // Add a Function to be called when the Random Number is clicked to change the Number Header State
  // The random number needs to be between 0 and 100 and showing no decimals

  // Add to the log text area saying "Random Number to " and then the new number generated on a new line.

  // Add a Function to be called when the Increment Number is clicked to change the Number Header State
  // If the number will be above 100 (an increment from 100 to 101) display an error stating that the maximum number is 100
  // Add to the log text area saying "Incremented Number to " and then the new number generated on a new line.

  // If the number is greater than or equal to 50, then the number header needs to be a red. If the number is below 50, then the number header needs to be a blue.

  render() {
    const styles = {}
    return (
      <div style={styles} className="App">
        <h1 style={{ color: this.state.color }}>{this.state.numberHeader}</h1>
        <button onClick={this.randomNum.bind(this)}> Random Number</button>{" "}
        &nbsp;
        <button onClick={this.incrementNum.bind(this)}>
          {" "}
          Increment Number
        </button>
        <br></br>
        <br></br>
        <textarea rows="4" cols="100" value={this.state.log}></textarea>
        {/* Add a text area for the log */}
        <p> By: Alex Barbati - 2/22/20</p>
        <p> &#169; 2019 World Shipping, Inc.</p>
      </div>
    )
  }
}

export default App
