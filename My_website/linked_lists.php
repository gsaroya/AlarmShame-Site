 <!DOCTYPE html>
<html>
	<head>
		<?php include("head.php"); ?>
	</head>

	<body>
		<?php include("header.php");?>

		<!--Body paragraph-->
		<div id="inner" class="container">
			<div class="text-center page-header">
				<h1>Linked List</h1>
			</div>
			<div class="body-paragraph" class="text-left">
				<p>
					Say you want to create a Pokemon class. Now each Pokemon is unique and has different features that you want to include
					 in that class. Maybe some attack moves, ability and nature, if it is shiny and even EV and IV if you are into competitive battling.
					  Now imaging that Pokemon is in a line waiting to see the new Pokemon movie (or in their case, just a movie). Now you don't know every Pokemon in that line but you can see the Pokemon that is right after you. Now you can't really have another Pokemon as you do not know what that Pokemon has yet but what you can do is Point to that Pokemon.</p>
				<p>This is essentialy what a linked list is. It is a series of classes where each instance of the class has a pointer to the next instance of that class. Now it has to be a pointer because when declaring a class, you must know the size of every variable inside that class and because you are still declaring the class, you would not be able to know the full size of that class. But you can declare a pointer of your own class because a pointer is a fixed size thus solving the problem from before. This is the basic instance of a linked list:</p>
                <pre class="prettyprint lang-cpp text-left"><code class="language-cpp">
class Node{ //Node is just a single instance of class
public:
   //Information that you want to keep in this instance
   int value;

   //Pointer to the next instance
   Node * next;
};
                </code></pre>
                <p> Now in most cases, linked lists are created in the heap because it is easier to pass around a linked lists in the heap than it is in the stack. This is because when the stack is popped, everything is the stack is lost where as it is easier to keep track of linked lists in heaps (especially important when passing linked lists to functions).</p>
                <p> Now to make a linked list is very simple. It is a 2 step process. First, you have to allocate memory in the heap to store the instance. Second, assign values to your instance. To do this, you would need to create a constructor for the node class.</p>
                <pre class="prettyprint lang-cpp text-left"><code class="language-cpp">
class Node{
public:
   int value;
   Node * next;

   //Constructor for the Node class
   Node(int number, Node * newNode):value(number),next(newNode){}
};

int main(){
   //Creates an empty node
   Node * node1 = NULL;

   //Creates a new node with the value of 2 and nothing else after it
   Node * node2 = new Node(2,NULL);

   //Creates a new node with the value of 2 and points to another node with the value of 3
   Node * node3 = new Node(2, new Node(3,NULL));
}
                </code></pre>
                <p>
Now lets say you want an insert function where you given the list and a value that you want to insert.Now lets say you want an insert function where you given the list and a value that you want to insert.
Now there could be several ways for you to insert another value to the list. You could add it to the front (first) of the list, back (last) of the list or if you are really daring, insert in order. Depending on what you need, there are advantages and disadvantages for each type of insert, but we will talk about that later. The method is simple for insertion in a list, create a new instance and put it where you want it to be.
Here is the insert function for inserting the new value into the back of the list.</p>
				<pre class="prettyprint lang-cpp text-left"><code class="language-cpp">
Node * insertBack(int val, Node * list){
   //Create a new node but instead of making the next NULL, you make it the rest of the list
   Node * n = new Node(val, list);
   //Now all you need to know is return the new start of the list
    return n;
}</code></pre>
				<p>
Analysis: This will always be in constant time (O(1)) because we know where the back of the list is. So the only thing we need to do is point there and tell people that we are the new back of the list. Now there is a problem with this code and that is what happens if 2 different values sees the back of the list. Ex:
				<pre class="prettyprint lang-cpp text-left"><code class="language-cpp">
Node * originalLine = new Node(2,NULL);
Node * lineOne = new Node(3,originalLine);
Node * lineTwo = new Node(4,originalLine);
				</code></pre>
<p> As you can see, the line DIVERGED into 2 lines!!! That is not a proper line nor is that a proper linked list. There is a way to fix this but I'll talk about that later.</p>

<p>The next type of insert is where you insert the new instance in order with a parameter of your choosing. Here is an example, pretend you are in grade 2 again. It is picture day and they want you to line up based on your height. The new instance is you trying to jump into the line and the parameter is the height of all the students. Here is the code for this type of insertion:</p>

				<pre class="prettyprint lang-cpp text-left"><code class="language-cpp">
Node * insertOrder(int val, Node * list){
   //Need to check if the you are the first one in the list
   If(list == NULL){
      return new Node(val, NULL);
   } 
   //Now we need to check to see if you are smaller than the last value in that list
   elseif (val <= list->val){
      //Because you are smaller, everything past this point will be bigger than you, thus you stop here, this case should only happen on the first call when you are the smallest value in that list
      return new Node(val, list);
   }
   //Now you check to see if you are biggest value in that list by checking to see if there are anymore in front of you
   elseif (list->next == NULL){
      //Because there is nothing bigger than you, you tell the current biggest thing that you are bigger
      list->next = new Node(val, NULL);
      //You have to return NULL because you did not change who the last person is
      //Note: you would have to make an if condition with this call to tell whoever is calling it that the smallest has not changed
      return NULL;
   }
   //Now you need to check to see if you are bigger than the current node but smaller than the node after that
   elseif (val > list->val && val <= list->next->val){
      //Since you know that you are between these two values, all we need to do now is create a new instance between these values
      list->next = new Node(val,list->next);
      return NULL;
   }
   //Else move to the next node because the value does not belong here
   else {
      return insertOrder(val,list->next);
   }
}
				</code></pre>
				<p>Analysis: This will at worst only once through the entire list and thus making it linear time O(1). 
				That is not bad because you are inserting, you do not want to look at the whole list over and over again because it would be redundant. 
				However we can do better. In fact we can do alot better than this because this is really ugly code. The fact that we have to write an 
				if statement to go along this code is really bad. An easier way to write the code is using a wrapper function that wraps around this piece of code. Here is the example:
				<pre class="prettyprint lang-cpp text-left"><code class="language-cpp">
Node * insertOrder(int val, Node * list){
	return Node * insertOrderWrapper(val, list, list);
}

Node * insertOrderWrapper(int val, Node * list, Node * head)
				</code></pre>
			</div>
		</div>

	</body>

</html> 