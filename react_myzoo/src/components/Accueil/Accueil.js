import React from 'react'
import Title from '../UI/Title/Title'
import Img from '../UI/Picture/Image/Image'
import banner from '../../assets/images/banderole.png'

const Accueil = (props) => {
    return(
        <>
            <Img src={banner} 
                width="100%"
                height="350px"
                alt="Banner accueil" />
                
            <Title bgColor={1} >Page d'accueil</Title>
            <div>
                <div>Part 1</div>
                <div></div>
            </div>
        </>
        
    )
}
export default Accueil