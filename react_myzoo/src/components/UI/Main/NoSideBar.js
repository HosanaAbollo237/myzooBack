import React from 'react'

const NoSideBar = (props) => {

    return(
        <main>
            <h1>Dans le main nosidebar</h1>
            {props.children}
        </main>
    )
}

export default NoSideBar