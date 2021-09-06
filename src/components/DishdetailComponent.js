import { Card, CardImg, CardText, CardBody, CardTitle, Breadcrumb, BreadcrumbItem } from 'reactstrap';
import { Link } from 'react-router-dom';

// If you click a card 

    function renderDish(dish){
        if(dish != null){
            return(
                <div className="col-12 col-md-5 m-1">
                <Card>
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
    function renderComments(comments){
        if(comments != null){
            return(
                <div className="col-12 col-md-5 m-1">
               
                   <CardTitle className="Title"><h4>Comments</h4></CardTitle>
                <CardBody>
                    <CardTitle heading>{comments.map(comments =>
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
        const comments = props.comments

        return(

            
               <div className="container">
                     <div className="row">
                    <Breadcrumb>
                    <BreadcrumbItem>
                    <Link to='/menu'>
                        Menu
                    </Link>
                    </BreadcrumbItem>
                    <BreadcrumbItem active>{props.dish.name}
                    </BreadcrumbItem>
                    </Breadcrumb>
                    <div className="col-12">
                        <h3>{props.dish.name}</h3>
                        <hr />
                    </div>
                </div>
                    <div className="row">
                        {DishDetail}
                
                    {renderDish(selectedDish)}
                    {renderComments(comments)}
               </div>
               </div>
        
           
       );
   }




export default DishDetail;