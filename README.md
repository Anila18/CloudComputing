# CloudComputing


Steps followed to create the project:

Created Amazon EC2 Instance(VM) from https://aws.amazon.com/ During the process of step1, we get a unique public key which is required for VM access. Saved it as cloudapp.pem Below ssh command is used to connect to the EC2 Virtual Machine ssh -i "cloudapp.pem" ubuntu@ec2-18-216-169-172.us-east-2.compute.amazonaws.com Note: ec2-user is the user, cloudapp.pem is the public key Used PHP to implement the webservice development

Steps to Execute the project:

Run the below URL to run "Calculator"https://ec2-18-216-169-172.us-east-2.compute.amazonaws.com/mysimplewebcalculator1.php Note: Created Elastic IP for the EC2 instance, So we don't have to change the URL when the instance is rebooted. Used CSS for background styles, HTMl for creating input fields, PHP as Server side Validations to take care as part of the work: Strings are not allowed to enter
