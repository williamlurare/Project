import React, { Component } from 'react';
import { Card, CardImg, CardImgOverlay, CardText, CardBody, CardTitle } from 'reactstrap';


// If you click a card 

    function renderDish(dish){
        if(dish != null){
            return(
                <div className="col-12 col-md-5 m-1">
                <Card >
                    <CardImg width="100%" object src={dish.image} alt={dish.name} />
                <CardBody>
                    <CardTitle heading>{dish.name}</CardTitle>
                    <CardText>{dish.description}</CardText>
                </CardBody>
                </Card>
                </div>
            );  
        }

        
        else{
            return(
                <div></div>
            );
        }
        
    }
    /* You should never forget add a key to the jsx element when generate them in loop. 
    The key should be unique and key should be from data, 
    if your data doesn't contain unique id per object then use index as a key
    */
    function renderComments(dish){
        if(dish != null){
            return(
                <div className="col-12 col-md-5 m-1">
               
                   <CardTitle className="Title"><h4>Comments</h4></CardTitle>
                <CardBody>
                    <CardTitle heading>{dish.comments.map(comments =>
                     <div>
                         
                         <CardText className="CardText" >{comments.comment}</CardText>
                         <CardText className="CardText alert-warning">--    {comments.author}, {new Intl.DateTimeFormat('en-US', { year: 'numeric', month: 'short', day: '2-digit'}).format(new Date(Date.parse(comments.date)))}
                         </CardText>
                        
                         </div>       
                    )}
          </CardTitle>

                </CardBody>
                
                </div>
            );  
        }

        
        else{
            return(
                <div></div>
            );
        }
        
    }
   
    const DishDetail = (props) => {
        
        console.log('Dishdeatail Component render is invoked')

        const selectedDish = props.dish

        return(

            
               <div className="container">
               <div className="row">
                   {DishDetail}
           
               {renderDish(selectedDish)}
               {renderComments(selectedDish)}
               </div>
               </div>
        
           
       );
   }




export default DishDetail;