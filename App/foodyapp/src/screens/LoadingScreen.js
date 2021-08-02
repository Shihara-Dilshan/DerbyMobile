import React from 'react';
import {View, Image, StyleSheet, Text} from 'react-native';
import * as Animatable from 'react-native-animatable';

const LoadingScreen = () => {
  return (
    <View style={styles.container}>
      <Animatable.View animation="bounceInRight">
        <Image
          style={styles.logo}
          source={require("./../assets/images/logo.png")}
        />
      </Animatable.View>
      <Animatable.View animation="bounceInLeft">
        <Text style={styles.title}>Food deliver service</Text>
      </Animatable.View>
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    backgroundColor: "#00a538",
    flex: 1,
    justifyContent: "center",
    alignItems: "center",
  },
  tinyLogo: {
    width: 150,
    height: 150,
    padding: 100,
    margin: 100,
  },
  logo: {
    width: 200,
    height: 200,
  },
  title: {
    color: "#7ec51d",
    fontSize: 20,
  },
});

export default LoadingScreen;
