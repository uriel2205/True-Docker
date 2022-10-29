pipeline {
  agent any
  tools {
    dockerTool 'Docker'
  }
  stages {
    stage('docker-compose build') {
      agent any
      steps {
        sh 'docker-compose up -d'
      }
      
    }
    }
  }