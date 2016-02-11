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
Now lets say you want an insert function where you given the list and a value that you want to insert.

			</div>
		</div>

	</body>

</html> 