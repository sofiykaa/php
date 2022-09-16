pipeline {
    agent any
    tools{
        maven 'maven'
    }
    stages{
        stage('ls la'){
            steps{
                sh 'ls -la'
            }
        }
        stage('Build docker image'){
            steps{
                script{
                    sh 'docker build -t sofiiahrabovska/devops-integration .'
                }
            }
        }
        stage('Push image to Hub'){
            steps{
                script{
                   withCredentials([string(credentialsId: 'dockerhub-pwd', variable: 'dockerhubpwd')]) {
                   sh 'docker login -u sofiiahrabovska -p ${dockerhubpwd}'

}
                   sh 'docker push sofiiahrabovska/devops-integration'
                }
            }
        }
        stage('finish'){
            steps{
                script{
                    sh 'echo "Hello world" '
                }
            }
        }
    }
}
