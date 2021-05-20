import React from 'react'
import Title from '../UI/Title/Title'
import Classes from './../../../public/css/AccueilCss.css'
import logo from '../../assets/images/logo.png'
import Img from '../UI/Picture/Image/Image'
import banner from '../../assets/images/banderole.png'


const Accueil = (props) => {
    const blue = 'blue'
    return(
        <div className="accueilWrapper">
            <Img  type="banner" src={banner} 
                alt="Banner accueil" />
                
            <Title bgColor="green" >Page d'accueil</Title>
            
            <div id="homeContent">

                <div className="blockAccueil">
                    <div className="imgWrapper">
                        <span className="helper"></span>
                        <Img className="imgLogo"  src={logo} width="400px" height="400px" alt="dummylogo" />
                    </div>
                    <div className="pWrapper"> 
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, 
                            repellat consequuntur. Minima dicta iure expedita, repellendus 
                            unde deleniti magni vero debitis nihil excepturi reprehenderit 
                            perspiciatis voluptas perferendis libero laudantium assumenda.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, 
                            repellat consequuntur. Minima dicta iure expedita, repellendus 
                            unde deleniti magni vero debitis nihil excepturi reprehenderit 
                            perspiciatis voluptas perferendis libero laudantium assumenda.Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, 
                            repellat consequuntur. Minima dicta iure expedita, repellendus 
                            unde deleniti magni vero debitis nihil excepturi reprehenderit 
                            perspiciatis voluptas perferendis libero laudantium assumenda.Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, 
                            repellat consequuntur. Minima dicta iure expedita, repellendus 
                            unde deleniti magni vero debitis nihil excepturi reprehenderit 
                            perspiciatis voluptas perferendis libero laudantium assumenda.
                        </p>
                    </div>
                </div>
                <div className="blockAccueil">  
                    <div className="imgWrapper">
                        <span className="helper"></span>
                        <Img src={logo} width="400px" height="400px" alt="dummylogo" />
                    </div>
                    <div className="pWrapper">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, 
                            repellat consequuntur. Minima dicta iure expedita, repellendus 
                            unde deleniti magni vero debitis nihil excepturi reprehenderit 
                            perspiciatis voluptas perferendis libero laudantium assumenda.
                        </p>  
                    </div>    
                </div> 
                
            </div>
        </div>
        
    )
}
export default Accueil