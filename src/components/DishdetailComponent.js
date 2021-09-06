import { Card, CardImg, CardText, CardBody, CardTitle, Breadcrumb, BreadcrumbItem,
Label, Input, Button, Modal, ModalHeader, ModalBody, Row, Col } from 'reactstrap';
import { Link } from 'react-router-dom';
import { Component } from 'react';
import { Control, LocalForm, Errors } from 'react-redux-form';




const required = (val) => val && val.length;
const maxLength = (len) => (val) => !(val) || (val.length <= len);
const minLength = (len) => (val) => (val) && (val.length >= len);
const isCharacter = (val) => (/^[A-Za-z]+$/).test(val);






    class CommentForm  extends Component {

        constructor(props){

            super(props); 
            this.state = {
                isCommentOpen: false,

            }
            this.ToggleComment =   this.ToggleComment.bind(this)
        }

        ToggleComment(){
            this.setState({
                isCommentOpen: !this.state.isCommentOpen
            });
        }

        handleSubmit(values) {
            console.log('Current State is:  ' +  JSON.stringify(values));
            alert('Current State is:  ' +  JSON.stringify(values));
        }

        render(){
        return (
<>
                    <Button outline  className="text-warning bg-dark" onClick={this.ToggleComment}>
                         <span className="fa fa-pencil-square-o fa-lg"></span> Submit Comment
                     </Button>
                     <Modal isOpen={this.state.isCommentOpen} toggle={this.ToggleComment} className="modal-dialog-centered"
                     >
        <ModalHeader  className="bg-primary text-warning" toggle={this.ToggleComment}>Submit Comment</ModalHeader>
        <ModalBody  className="bg-dark text-light">
            <LocalForm onSubmit={(values) => this.handleSubmit(values)}>
            <Row className="form-group">
            <div className="form-check">
                                    <Label htmlfor="Rating" md={2} check>
                                        <strong>Rating</strong>
                                    </Label>
                                    </div>  <br />
                                    <Col md={5}>
            <Control.select model=".rating" name="rating"
                                     className="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </Control.select>
                                    </Col>
                </Row><br />
                <Row className="form-group">
                    <Label htmlFor="password" md={3}>Your Name: </Label>
                    <Col md={10}>
                    <Control.text  model=".yourname" id="password" name="yourname" 
                    validators={{required, minLength: minLength(3), maxLength: maxLength(15), isCharacter}} />

                    <Errors className="text-danger" model=".yourname" show="touched" 
                    messages={{
                        required: 'Dont leave the section empty',
                        minLength: 'Must be more than 3 chararters',
                        maxLength: 'Must be less than 16 characters',
                        isCharacter: 'Invalid Characters'
                    }}/>
                    </Col>
                </Row><br />
                <Row className="form-group">
                              <Label htmlFor="feedback" md={4} >Comment: </Label>  
                                <Col md={10}>
                                    <Control.textarea model=".message" id="message" name="message" 
                                    row="12" className="form-control"/>

                                </Col>
                            </Row><br />
                <Button type="submit" value="submit" className="bg-success"> Submit
                </Button>
            </LocalForm>
        </ModalBody>
    </Modal>
</>

        );

    }
    }
  



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
          </CardTitle><br />
          <CommentForm  />
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